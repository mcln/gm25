<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UploadExercisePostulate;
use Illuminate\Support\Facades\Auth;
use App\Models\UploadExercise;

class SolveExerciseButton extends Component
{
    public $showModal = false;
    public $duracion;
    public $valor;
    public $userId;
    public $ejercicio;
    public $acepto = false;

    public function mount()
    {
        $this->userId = Auth::id(); // Asigna el ID del usuario actual
    }

    public function abrirModal()
    {
        $this->showModal = true;
    }

    public function cerrarModal()
    {
        $this->showModal = false;
    }

    public function resolverGuia()
    {
        $this->validate([
            'valor' => 'required',
            'acepto' => 'accepted',
        ], [
            'valor.required' => 'El campo de valor es obligatorio.',
            'acepto.accepted' => 'Debes aceptar resolver el ejercicio antes de continuar.',
        ]);



        // Guardar en la tabla Upload_exercises_postulates
        $postulate = new UploadExercisePostulate();
        $postulate->valor_dolar = $this->valor;
        $postulate->user_id = $this->userId; // ID del usuario actual
        $postulate->upload_exercise_id = $this->ejercicio->id; // ID del ejercicio actual
        $postulate->status = 'postulate';
        $postulate->save();

        // Cierra el modal después de completar la lógica
        $this->cerrarModal();
    }

    public function render()
    {
        return view('livewire.solve-exercise-button');
    }
}
