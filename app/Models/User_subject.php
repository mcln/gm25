<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_subject extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo('App\Models\User');
    }

    public function subject(){

        return $this->belongsTo('App\Models\Subject');
    }
}
