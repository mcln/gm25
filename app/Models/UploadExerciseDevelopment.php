<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadExerciseDevelopment extends Model
{
    use HasFactory;

    protected $table = 'upload_exercises_development';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
