<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exercise_id',
        'score',
        'directory', 
    ];

    //relacion 1 a muchos (inversa)
    public function user(){

        return $this->belongsTo('App\Models\User');

    }

    public function exercise(){
 
        return $this->belongsTo('App\Models\Exercise');

    }
}
