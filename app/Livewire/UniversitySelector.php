<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\University;
use App\Models\Subject;
use App\Models\Type;
use App\Models\Semester;
use App\Models\ExerciseUniversity;
use Illuminate\Support\Collection;

class UniversitySelector extends Component
{
    public $countries;
    public $universities;
    public $subjects;
    public $types;
    public $semesters;
    public $selectedCountry = 41; // Chile por defecto
    public $selectedUniversity = 1; // Universidad por defecto
    public $selectedSubject;
    public $listData = []; // Aquí guardamos los listados de todos los tipos

    public function mount()
    {
        $this->countries = Country::orderByRaw('id = 41 DESC')->get();
        $this->universities = collect();
        $this->subjects = collect();
        $this->types = Type::all(); // Cargamos los tipos en el mount
        $this->updatedSelectedCountry($this->selectedCountry);
        $this->updatedSelectedUniversity($this->selectedUniversity);
    }

    public function updatedSelectedCountry($countryId)
    {
        $this->universities = University::where('country_id', $countryId)->get();
        $this->subjects = collect();
        $this->listData = [];

        if (!$this->universities->contains('id', $this->selectedUniversity)) {
            $this->selectedUniversity = null;
        }
    }

    public function updatedSelectedUniversity($universityId)
    {
        if ($universityId) {
            $this->subjects = Subject::where('university_id', $universityId)->get();
            $this->listData = [];
        }
    }

    public function updatedSelectedSubject($subjectId)
    {
        $this->listData = [];

        // Cargar listados de Certámenes y Guías automáticamente
        $this->loadCertamenes();
        $this->loadGuias();
        $this->loadControles();
    }

    private function loadCertamenes()
    {
        $exercises = ExerciseUniversity::where('university_id', $this->selectedUniversity)
            ->where('subject_id', $this->selectedSubject)
            ->where('type_id', 1) // Certámenes
            ->whereNull('parent_id')
            ->get();

        $certamenes = $exercises->map(function ($exercise) {
            $semester = $exercise->semester;
            return [
                'type' => 'Certamen',
                'year' => $semester->year,
                'period' => $semester->period,
                'exercise_id' => $exercise->id,
                'route' => route('universities.certamen', ['exercise_id' => $exercise->id]),
                'name' => "{$semester->period} - {$semester->year}"
            ];
        })->toArray();

        $this->listData = array_merge($this->listData, $certamenes);
    }

    private function loadGuias()
    {
        $guias = ExerciseUniversity::where('university_id', $this->selectedUniversity)
            ->where('subject_id', $this->selectedSubject)
            ->where('type_id', 3) // Guías
            ->whereNull('parent_id')
            ->get();

        $guiaData = $guias->map(function ($guia) {
            return [
                'type' => 'Guía',
                'exercise_id' => $guia->id,
                'route' => route('universities.guia', ['id' => $guia->id]),
                'name' => $guia->name
            ];
        })->toArray();

        $this->listData = array_merge($this->listData, $guiaData);
    }

    private function loadControles()
    {
        $controles = ExerciseUniversity::where('university_id', $this->selectedUniversity)
            ->where('subject_id', $this->selectedSubject)
            ->where('type_id', 2) // Controles
            ->whereNull('parent_id')
            ->get();

        $controlData = $controles->map(function ($control) {
            return [
                'type' => 'Control',
                'exercise_id' => $control->id,
                'route' => route('universities.control', ['id' => $control->id]),
                'name' => $control->name
            ];
        })->toArray();

        $this->listData = array_merge($this->listData, $controlData);
    }

    public function render()
    {
        return view('livewire.university-selector');
    }
}