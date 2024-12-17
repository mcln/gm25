<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise_report;
use Illuminate\Support\Facades\Validator;

class ReportButton extends Component
{
    public $showModal = false;
    public $email;
    public $description;
    public $exercise;
    public $showSuccessMessage = false;

    public function mount($exercise)
    {
        $this->exercise = $exercise;
        $this->resetFields();
    }

    public function render()
    {
        return view('livewire.report-button');
    }

    public function submit()
    {
        $validatedData = Validator::make(
            [
                'description' => $this->description,
            ],
            [
                'description' => 'required',
            ]
        )->validate();

        $exerciseReport = new Exercise_report();
        $exerciseReport->user_id = auth()->user()->id;
        $exerciseReport->exercise_id = $this->exercise->id;
        $exerciseReport->description_error = $this->description;
        $exerciseReport->status = 'Activo';
        $exerciseReport->save();

        // Una vez enviado el reporte, mostramos el mensaje de éxito
        $this->showSuccessMessage = true;
        
    }

    public function resetFields()
    {
        $this->email = '';
        $this->description = '';
        $this->showSuccessMessage = false;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email' => 'required|email',
            'description' => 'required',
        ]);
    }

    public function showModal()
    {
        $this->resetFields();
        $this->showModal = true;
    }

    public function hideModal()
    {
        $this->showModal = false;
    }
}

/* <?php

namespace App\Http\Livewire;

use App\Models\Exercise_report;
use Livewire\Component;

class ReportButton extends Component
{
    public $showModal;
    public $description_error;
    public $exercise;
    public $successMessage = null;
    public $showForm = true;
    public $showSuccessMessage = false;

    public function mount($exercise)
    {
        $this->exercise = $exercise;
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.report-button');
    }

    public function submit()
    {

    $validatedData = $this->validate([ 
        'description_error' => 'required', 
    ]); 

    $exerciseReport = new Exercise_report(); 
    $exerciseReport->user_id = auth()->user()->id; 
    $exerciseReport->exercise_id = $this->exercise->id; 
    $exerciseReport->description_error = $this->description_error; 
    $exerciseReport->status = 'Activo'; 
    $exerciseReport->save(); 

    $this->showSuccessMessage = true; 
    $this->showForm = false;
    }
} */
