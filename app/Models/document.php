<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;

    public function mayor()
    {
        return $this->belongsTo(mayor::class, 'mayor_id', 'id');
    }

    public function claimants()
    {
        return $this->belongsToMany(claimant::class, 'request', 'document_id', 'claimant_id')
                            // ->using(request::class)
                            ->as('request')
                            ->withTimestamps();
    }

}
