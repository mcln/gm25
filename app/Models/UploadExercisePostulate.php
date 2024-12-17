<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadExercisePostulate extends Model
{
    use HasFactory;
    protected $table = 'upload_exercises_postulates';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function upload_exercise()
    {
        return $this->belongsTo(UploadExercise::class, 'upload_exercises_id');
    }
}
