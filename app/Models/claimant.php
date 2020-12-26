<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class claimant extends Model
{
    use HasFactory;

    public function documents()
    {
        return $this->belongsToMany(document::class, 'request', 'claimant_id', 'document_id')
                            // ->using(request::class)
                            ->as('request')
                            ->withTimestamps();
    }
}
