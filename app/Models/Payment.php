<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    //relacion 1 a muchos (inversa)
    public function user(){

        return $this->belongsTo('App\Models\User');

    }

    public function subscription(){
 
        return $this->belongsTo('App\Models\Subscription');

    }

    //relacion 1 a 1
    public function currency(){

        return $this->hasOne('App\Models\Currency');

    }
}
