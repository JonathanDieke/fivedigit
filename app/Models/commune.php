<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commune extends Model
{
    use HasFactory;

    public function city(){
        return $this->belongsTo(city::class,  "city_id" , "id");
    }

    public function hospitals()
    {
        return $this->hasMany(hospital::class,"commune_id",  'id');
    }

    public function mayor()
    {
        return $this->hasOne(mayor::class, 'commune_id', 'id');
    }
}
