<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mother extends Model
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany(child::class, 'mother_id', 'id');
    }
}
