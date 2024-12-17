<x-AppLayout>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold mb-4 text-center">{{ $guia->name }}</h1>

            <div class="space-y-4">
                @foreach ($headers as $index => $header)
                    <div class="border rounded-lg overflow-hidden relative flex justify-center">
                        <!-- Imagen de la guía en tamaño original -->
                        <img src="{{ asset('storage/' . $header->image_path) }}" alt="Imagen de la guía"
                             class="h-auto" usemap="#mapa-ejercicios-{{ $header->id }}" style="max-width: none; height: auto;">
                        
                        <!-- Crear el mapa de ejercicios sobre la imagen -->
                        <map name="mapa-ejercicios-{{ $header->id }}">
                            @if(isset($exercises[$index + 1]))
                                @foreach ($exercises[$index + 1] as $exercise)
                                    @if ($exercise->coords)
                                        <!-- Area clicable para cada ejercicio con sus coordenadas -->
                                        <area shape="rect" coords="{{ $exercise->coords }}"
                                              href="{{ route('universities.show', ['exercise_id' => $exercise->id]) }}"
                                              alt="Ejercicio {{ $exercise->id }}" style="cursor: pointer;">
                                    @endif
                                @endforeach
                            @endif
                        </map>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-AppLayout>







