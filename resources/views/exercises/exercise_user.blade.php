<x-AppLayout>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">
    <div class="rounded-lg grid grid-cols-1 gap-1 py-4 px-4 bg-azul-oscuro"> 
        <h1 class="text-2xl font-semibold">Ejercicios guardados</h1> 
        <table class="w-full mt-8">
            @foreach ($directories as $directory)
                <tr class="bg-azul-oscuro"> 
                    <th class="font-bold py-2 px-4 rounded-lg" colspan="2">
                        <livewire:edit-directory-button :directory="$directory" :key="$directory" />
                        <span wire:loading.class="opacity-50">{{ $directory }}</span>
                    </th>
                </tr>
                @foreach ($exercises as $exercise)
                    @if ($exercise->directory == $directory)
                        <tr>
                            <td class="py-4">
                                <a href="{{ route('exercises.show', $exercise->exercise->id) }}" class="h-14 shadow-xl rounded-lg w-400 h-300 flex items-center" style="background-image: url({{ asset(Storage::url($background_cuadros->image_path)) }})">
                                    <img src="{{ asset(Storage::url($exercise->exercise->header_exercise->image_path)) }}" alt="" class="ml-10"> 
                                </a>   
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </table>
    </div>
    </div>
</x-AppLayout>