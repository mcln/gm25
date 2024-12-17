<?php

namespace App\Livewire;

use App\Models\UploadExercise;
use App\Models\UploadExercisePostulate;
use Carbon\Carbon;
use Livewire\Component;

class ChooseExercisePostulateButton extends Component
{
    public $exerciseId;
    public $postulateId;

    public function choose()
    {
        $postulate = UploadExercisePostulate::findOrFail($this->postulateId);

        // Actualizar la columna 'time_since_accept' en la tabla 'upload_exercises'
        $exercise = UploadExercise::findOrFail($this->exerciseId);
        $exercise->time_since_accept = Carbon::now();
        $exercise->save();

        // Actualizar la columna 'teacher_id' en la tabla 'upload_exercises'
        $exercise->teacher_id = $postulate->user_id;
        $exercise->save();

        // Otras acciones necesarias después de elegir el ejercicio

        session()->flash('success_message', 'Ejercicio elegido correctamente.');

        return redirect()->back();
    }
    
    public function render()
    {
        return view('livewire.choose-exercise-postulate-button');
    }
}
