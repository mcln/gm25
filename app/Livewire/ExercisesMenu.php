<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ExerciseUniversity;
use Illuminate\Support\Str;

class ExercisesMenu extends Component
{
    public $currentExerciseId;
    public $groupedExercises = [];
    public $type;

    public function mount($exerciseId, $type)
    {
        $this->currentExerciseId = $exerciseId;
        $this->type = $type; // 1 for certámenes, 3 for guías
        $this->loadExercises();
    }

    public function loadExercises()
    {
        $currentExercise = ExerciseUniversity::findOrFail($this->currentExerciseId);
        $parentId = $currentExercise->parent_id ?? $currentExercise->id;

        $exercises = ExerciseUniversity::where('type_id', $this->type)
            ->where('parent_id', $parentId)
            ->get()
            ->map(function ($exercise) {
                $title = $this->extractExerciseNumber($exercise->slug);
                return [
                    'id' => $exercise->id,
                    'title' => $title,
                    'group' => $this->extractGroup($title),
                    'sortKey' => $this->generateSortKey($title),
                ];
            })
            ->sortBy('sortKey')
            ->groupBy('group')
            ->map(function ($group) {
                return $group->sortBy('sortKey')->values();
            });

        $this->groupedExercises = $exercises;
    }

    private function extractExerciseNumber($slug)
    {
        $parts = explode('-', $slug);
        return end($parts);
    }

    private function extractGroup($title)
    {
        return Str::of($title)->match('/^\d+/')->__toString();
    }

    private function generateSortKey($exerciseNumber)
    {
        preg_match('/(\d+)(\D*)/', $exerciseNumber, $matches);
        $number = isset($matches[1]) ? str_pad($matches[1], 5, '0', STR_PAD_LEFT) : '00000';
        $letter = isset($matches[2]) ? $matches[2] : '';
        return $number . $letter;
    }

    public function redirectToExercise($exerciseId)
    {
        $route = $this->type == 1 ? 'universities.show' : 'universities.guia';
        return redirect()->route($route, ['id' => $exerciseId]);
    }

    public function render()
    {
        return view('livewire.exercises-menu');
    }
}