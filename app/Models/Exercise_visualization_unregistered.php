<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise_visualization_unregistered extends Model
{
    use HasFactory;

    protected $table = 'exercise_visualization_unregistered';

    protected $fillable = [
        'exercise_id',
        'visitor_id',
    ];

    public function exercise(){
 
        return $this->belongsTo('App\Models\Exercise');

    }
}
