<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function child()
    {
        return $this->hasOne(child::class, 'document_id' ,'id');
    }

    /**
     * Get the user that owns the document
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
