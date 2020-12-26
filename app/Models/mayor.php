<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mayor extends Model
{
    use HasFactory;

    public function commune()
    {
        return $this->hasOne(commune::class, 'mayor_id', 'id');
    }

    public function documents()
    {
        return $this->hasMany(document::class, 'mayor_id', 'id');
    }
}
