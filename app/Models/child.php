<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    use HasFactory;

    public function father()
    {
        return $this->belongsTo(father::class, 'father_id', 'id');
    }

    public function mother()
    {
        return $this->belongsTo(mother::class, 'mother_id', 'id');
    }
}
