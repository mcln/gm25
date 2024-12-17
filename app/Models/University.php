<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country_id'];

    // Relación con subjects
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    // Relación con exercise_universities
    public function exerciseUniversities()
    {
        return $this->hasMany(ExerciseUniversity::class);
    }
}
