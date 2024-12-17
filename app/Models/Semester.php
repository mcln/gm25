<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable = ['name', 'year'];

    // Relación con exercise_universities
    public function exerciseUniversities()
    {
        return $this->hasMany(ExerciseUniversity::class);
    }
}