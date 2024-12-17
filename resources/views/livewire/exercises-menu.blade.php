<div class="bg-azul-bonito w-64 h-full fixed left-0 top-0 overflow-y-auto">
    <div class="p-4">
        <h2 class="text-white font-semibold mb-4 text-lg">Ejercicios</h2>
        @foreach($groupedExercises as $group => $exercises)
            <div class="mb-4">
                <h3 class="text-white font-medium mb-2">Grupo {{ $group }}</h3>
                <div class="space-y-2">
                    @foreach($exercises as $exercise)
                        <button 
                            wire:click="redirectToExercise({{ $exercise['id'] }})" 
                            class="@if($exercise['id'] == $currentExerciseId) bg-white text-azul-bonito @else bg-azul-bonito text-white hover:bg-azul-electrico @endif w-full px-3 py-1 rounded-full text-sm font-medium text-left"
                        >
                            {{ $exercise['title'] }}
                        </button>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>