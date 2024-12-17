<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    //relacion 1 a muchos
    public function country(){

        return $this->belongsTo('App\Models\Country');

    }

    public function cities(){

        return $this->hasMany('App\Models\City');

    }
}
