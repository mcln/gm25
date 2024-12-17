<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

    public function university(){

        return $this->belongsTo('App\Models\University');
    }

    public function subjects(){

        return $this->hasMany('App\Models\Subject');

    }
}
