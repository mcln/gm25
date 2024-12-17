<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise_comment extends Model
{
    use HasFactory;

    public function exercise_comments()
    {
        return $this->hasMany(Exercise_comment::class, 'parent_id');
    }

    //relacion 1 a muchos (inversa)
    public function user()
    {

        return $this->belongsTo('App\Models\User');
    }

    public function exercise()
    {

        return $this->belongsTo('App\Models\Exercise');
    }
}
