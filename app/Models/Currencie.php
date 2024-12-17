<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencie extends Model
{
    use HasFactory;

    public function payment(){
 
        return $this->belongsTo('App\Models\Payment');

    }

    public function country(){
 
        return $this->belongsTo('App\Models\Country');

    }
}
