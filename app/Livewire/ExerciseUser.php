<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise_user;
use App\Models\Image;
use Illuminate\Support\Collection;

class ExerciseUser extends Component
{
    public $directory;
    public $directoryToEdit;
    public $newDirectoryName;
    public $showModal = false; // Nueva propiedad para controlar la visibilidad del modal

    public function deleteExercise($exercise_id)
    {
        Exercise_user::where('user_id', auth()->id())
            ->where('exercise_id', $exercise_id)
            ->delete();
    }

    public function deleteDirectory($directory)
    {
        Exercise_user::where('user_id', auth()->id())
            ->where('directory', $directory)
            ->delete();
    }

    public function updateDirectory()
    {
        $exerciseUsers = Exercise_user::where('directory', $this->directoryToEdit)->get();

        foreach ($exerciseUsers as $eu) {
            $eu->update(['directory' => $this->newDirectoryName]);
        }

        $this->showModal = false; // Cerrar el modal después de guardar los cambios

        $this->directoryToEdit = null;
        $this->newDirectoryName = '';
    }

    protected $listeners = [
        'deleteDirectory' => 'deleteDirectory'
    ];

    public function editDirectory($directory)
    {
        $this->directoryToEdit = $directory;
        $this->showModal = true; // Mostrar el modal al hacer clic en el botón "Editar"
    }

    public function render()
    {
        $exerciseUsers = Exercise_user::where('user_id', auth()->user()->id)->get();
        $directories = $exerciseUsers->pluck('directory')->unique();
        $exercises = new Collection();

        foreach ($directories as $directory) {
            $exercises[$directory] = $exerciseUsers->where('directory', $directory)->pluck('exercise');
        }

        $background_cuadros = Image::where('name', 'fondo_cuadriculado')->first();

        return view('livewire.exercise-user', compact('directories', 'exercises', 'background_cuadros'));
    }
}
