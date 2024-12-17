<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    //relacion 1 a muchos
    public function region(){

        return $this->belongsTo('App\Models\Region');

    }

    public function communes(){

        return $this->hasMany('App\Models\Commune');

    }
}
