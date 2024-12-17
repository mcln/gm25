<x-app-layout>
    <div class="div-ampliar mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">

        <h1 class="text-4xl font-bold mt-8 mb-4">Ejercicios para resolver</h1>

        @foreach ($ejercicios as $ejercicio)
            @if ($ejercicio->teacher_id === $profesorID && now() < \Carbon\Carbon::parse($ejercicio->time_max_accept))
                <div class="border rounded-lg border-azul-bonito mb-4">
                    <table class="min-w-full">
                        <tr>
                            <td class="w-2/12">
                                <div>
                                    <img src="{{ $ejercicio->url }}" alt="Imagen del ejercicio"
                                        class="m-2 w-44 h-44 rounded-md object-cover cursor-pointer"
                                        id="imagen-{{ $ejercicio->id }}">
                                </div>
                                <div id="imagen-ampliada"
                                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 hidden">
                                    <img src="" alt="Imagen ampliada" id="imagen-ampliada-src"
                                        class="max-w-full max-h-full">
                                </div>
                            </td>
                            <td class="align-top w-10/12">
                                <p><b>Fecha límite:</b>
                                    {{ \Carbon\Carbon::parse($ejercicio->time_max_accept)->diffForHumans() }}</p>

                                @foreach ($sectors->where('id', $ejercicio->sector_id) as $sector)
                                    <p><b>Sector de Matemáticas:</b> {{ $sector->id }}) {{ $sector->name }}</p>
                                @endforeach
                                <p><b>Descripción:</b> {{ $ejercicio->description }}</p>

                                @livewire('development-exercise-upload')
                            </td>
                        </tr>

                    </table>
                </div>
            @endif
        @endforeach
    </div>

    <script>
        // Obtener todas las imágenes
        const imagenes = document.querySelectorAll('[id^="imagen-"]');

        // Agregar el evento de clic a cada imagen
        imagenes.forEach(imagen => {
            imagen.addEventListener('click', () => {
                const imagenAmpliada = document.getElementById('imagen-ampliada');
                const imagenAmpliadaSrc = document.getElementById('imagen-ampliada-src');

                // Actualizar la URL de la imagen ampliada
                imagenAmpliadaSrc.src = imagen.src;

                // Mostrar el contenedor de la imagen ampliada
                imagenAmpliada.classList.remove('hidden');
            });
        });

        // Agregar el evento de clic al contenedor de la imagen ampliada para cerrarla
        const imagenAmpliada = document.getElementById('imagen-ampliada');
        imagenAmpliada.addEventListener('click', () => {
            imagenAmpliada.classList.add('hidden');
        });
    </script>
</x-app-layout>
