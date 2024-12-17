<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'university_id'];

    // Relación con university
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    // Relación con exercise_universities
    public function exerciseUniversities()
    {
        return $this->hasMany(ExerciseUniversity::class);
    }
}
