<?php

namespace App\Http\Controllers;

use App\Models\Exercise_user;
use App\Models\Image;

class ExerciseUserController extends Controller
{
    public function index()
    {
        $exercises = Exercise_user::where('user_id', auth()->user()->id)
                          ->with('exercise.header_exercise')
                          ->get();
        $directories = $exercises->pluck('directory')->unique();

        $background_cuadros = Image::where('name', 'fondo_cuadriculado')->first();
    
        return view('exercises.exercise_user', compact('exercises', 'directories', 'background_cuadros'));
    }
}
