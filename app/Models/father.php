<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class father extends Model
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany(child::class, 'father_id', 'id');
    }
}
