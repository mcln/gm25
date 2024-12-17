<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise_report extends Model
{
    use HasFactory;

    //relacion 1 a muchos (inversa)
    public function user(){

        return $this->belongsTo('App\Models\User');

    }

    public function exercise(){
 
        return $this->belongsTo('App\Models\Exercise');

    }
}
