<?php

namespace App\Livewire;

use App\Models\Sector;
use Livewire\Component;
use App\Models\UploadExercise;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class ExerciseUploadForm extends Component
{

    use WithFileUploads;

    public $descripcion;
    public $date;
    public $currency;
    public $sector;
    public $file;

    public $rules = [
        'descripcion' => 'required',
        'date' => 'required',
        'currency' => 'required',
        'sector' => 'required',
        'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function messages()
    {
        return [
            'descripcion.required' => 'El campo "Descripción" es obligatorio.',
            'date.required' => 'El campo "Fecha de entrega" es obligatorio.',
            'currency.required' => 'El campo "Valor" es obligatorio.',
            'sector.required' => 'El campo "Sector" es obligatorio.',
            'file.required' => 'El campo "Imagen de ejercicio" es obligatorio.',
            'file.image' => 'El campo "Imagen de ejercicio" debe ser una imagen.',
            'file.mimes' => 'El campo "Imagen de ejercicio" debe ser un archivo de tipo: jpeg, png, jpg, gif, svg.',
            'file.max' => 'El campo "Imagen de ejercicio" debe ser menor a 2MB.',
        ];
    }

    public function render()
    {
        $sectors = Sector::orderBy('id')->get();
        return view('livewire.exercise-upload-form', [
            'sectors' => $sectors,
        ]);
    }

    public function upload()
    {
        /* dd($this->date);
        dd($this->currency); */
        $this->validate();

        /* Cloudinary Store */
        $result = $this->file->storeOnCloudinary('Upload/Headers');
        $uploadedFileUrl = $result->getSecurePath();

        // Obtener el ID del usuario actualmente autenticado
        $userId = auth()->user()->id;

        // Crear una nueva instancia de UploadExercise y asignar los valores
        $uploadExercise = new UploadExercise();
        $uploadExercise->user_id = $userId;
        $uploadExercise->url = $uploadedFileUrl;

        $fechaEntrega = Carbon::parse(str_replace('/', '-', $this->date))->setTime(23, 59, 0);
        $uploadExercise->time_max_accept = $fechaEntrega;

        $uploadExercise->suggested_value_usd = $this->currency;

        // Obtener el nombre del sector del formulario
        $sector = Sector::where('name', $this->sector)->first();
        $uploadExercise->sector = $sector->name;

        $uploadExercise->description = $this->descripcion;

        // Guardar el objeto UploadExercise en la base de datos
        $uploadExercise->save();

        session()->flash('success', 'Archivo subido correctamente.');
        $this->reset();
    }
}
