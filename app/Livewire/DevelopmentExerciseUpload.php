<?php

namespace App\Livewire;

use App\Models\UploadExerciseDevelopment;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class DevelopmentExerciseUpload extends Component
{
    use WithFileUploads;

    public $files = [];
    public $comments = [];

    public function render()
    {
        return view('livewire.development-exercise-upload');
    }

    public function addFileInput()
    {
        if (count($this->files) < 100) {
            $this->files[] = null;
            $this->comments[] = null;
        }
    }

    public function filesChosen($index, $files)
    {
        $this->files[$index] = $files[0];
    }

    public function uploadFiles()
    {
        $teacherId = Auth::id();

        // Guardar los archivos y comentarios en la base de datos
        $upload = new UploadExerciseDevelopment();
        $upload->teacher_id = $teacherId;
        $upload->save();

        foreach ($this->files as $index => $file) {
            
            if ($file) {
                // Subir el archivo a Cloudinary
                $result = $file->storeOnCloudinary('Upload/Developments');
                $uploadedFileUrl = $result->getSecurePath();

                $upload->{"image_" . ($index + 1)} = $uploadedFileUrl;
                $upload->{"comment_" . ($index + 1)} = $this->comments[$index];
            }
        }

        $upload->save();

        // Restablecer los arrays de archivos y comentarios
        $this->files = [];
        $this->comments = [];

        // Redireccionar o mostrar un mensaje de éxito, etc.
    }
}
