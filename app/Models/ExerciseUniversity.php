<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseUniversity extends Model
{
    protected $fillable = [
        'university_id',
        'subject_id',
        'type_id',
        'semester_id',
        'parent_id',
        'slug',
        'name',
        'item_id',
        'active',
        'order',
        'view_count',
        'likes',
        'certamen_number'
    ];

    // Relación con university
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    // Relación con subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // Relación con type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    // Relación con semester
    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    // Relación recursiva: Ejercicio padre
    public function parent()
    {
        return $this->belongsTo(ExerciseUniversity::class, 'parent_id');
    }

    // Relación recursiva: Ejercicios hijos
    public function children()
    {
        return $this->hasMany(ExerciseUniversity::class, 'parent_id');
    }

    // Relación con header_ex_universities
    public function headerExUniversity()
    {
        return $this->hasOne(HeaderExUniversity::class, 'exercise_university_id');
    }

    // Relación con development_ex_universities
    public function developmentExUniversities()
    {
        return $this->hasMany(DevelopmentExUniversity::class);
    }

    // Define la relación con el modelo Item
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}