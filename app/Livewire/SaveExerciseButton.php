<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise_user;

class SaveExerciseButton extends Component
{
    public $showModal = false;
    public $directories = [];
    public $selectedDirectories = [];
    public $directory_name = '';
    public $exercise;

    public function saveExerciseDirectories()
    {
        Exercise_user::where('exercise_id', $this->exercise->id)->where('user_id', auth()->id())->delete();

        foreach ($this->selectedDirectories as $directoryName) { 
            $existingDirectory = Exercise_user::where('directory', $directoryName)->where('exercise_id', $this->exercise->id)->where('user_id', auth()->id())->first(); 

            if ($existingDirectory) {
                $directory = $existingDirectory;
            } else {
                $directory = new Exercise_user(); 
                $directory->user_id = auth()->user()->id; 
                $directory->exercise_id = $this->exercise->id; 
                $directory->directory = $directoryName; 
            }
            $directory->save(); 
        }

        $this->openModal();
    }

/*     public function openModal()
    {
        $exerciseDirectories = Exercise_user::where('exercise_id', $this->exercise->id)->where('user_id', auth()->id())->pluck('directory');
        $this->selectedDirectories = $exerciseDirectories;
        $this->directories = Exercise_user::where('user_id', auth()->id())->select('directory')->distinct()->get();
        $this->showModal = true;
    } */

    public function openModal()
    {
        $exerciseDirectories = Exercise_user::where('exercise_id', $this->exercise->id)
            ->where('user_id', auth()->id())
            ->pluck('directory');

        $this->selectedDirectories = $exerciseDirectories;

        $this->directories = Exercise_user::where('user_id', auth()->id())
            /* ->where('exercise_id', $this->exercise->id) */
            ->select('directory')
            ->distinct()
            ->get();

        $this->showModal = true;
    }

    public function closeModal() 
    { 
        $this->showModal = false; 
    } 

    public function createDirectoryWithoutModal() 
    { 
        $this->validate([
            'directory_name' => 'required|max:100',
        ]); 

        $directory = new Exercise_user(); 
        $directory->user_id = auth()->user()->id; 
        $directory->exercise_id = $this->exercise->id; 
        $directory->directory = $this->directory_name; 
        $directory->save(); 

        $this->directory_name = ''; 
 
        $this->openModal();
    } 

    public function render() 
    { 
        return view('livewire.save-exercise-button', [
            'directories' => $this->directories,
        ]); 
    } 
}