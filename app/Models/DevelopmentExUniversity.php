<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevelopmentExUniversity extends Model
{
    protected $fillable = ['exercise_university_id', 'image_path'];

    // Relación con exercise_universities
    public function exerciseUniversity()
    {
        return $this->belongsTo(ExerciseUniversity::class);
    }
}