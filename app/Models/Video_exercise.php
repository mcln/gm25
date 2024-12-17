<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_exercise extends Model
{
    use HasFactory;

    //relacion 1 a 1
    public function exercise(){

        return $this->belongsTo('App\Models\Exercise');

    }
}
