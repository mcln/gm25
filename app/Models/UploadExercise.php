<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadExercise extends Model
{
    
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function upload_exercises_postulates()
    {
        return $this->hasMany(UploadExercisePostulate::class);
    }
}
