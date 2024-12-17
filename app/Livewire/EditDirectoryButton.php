<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise_user;

class EditDirectoryButton extends Component
{
    public $editing = false;
    public $newDirectory;
    public $directory;
    public $originalDirectory;

    public function setDirectory($directory)
    {
        $this->directory = $directory;
        $this->originalDirectory = $directory;
    }

    public function mount($directory)
    {
        $this->directory = $directory;
        $this->originalDirectory = $directory;
    }

    public function editDirectory()
    {
        $this->editing = true;
    }

    public function saveDirectory()
    {
        Exercise_user::where('user_id', auth()->user()->id)
            ->where('directory', $this->originalDirectory)
            ->update(['directory' => $this->newDirectory]);

        $this->directory = $this->newDirectory;
        $this->originalDirectory = $this->newDirectory; // Actualiza la propiedad $originalDirectory con el nuevo valor
        $this->editing = false;

        $this->render();
    }

    public function render()
    {
        return view('livewire.edit-directory-button');
    }
}
