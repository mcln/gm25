<x-app-layout>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">

        <h1 class="text-4xl font-bold mt-8 mb-4">Postula y resuelve ejercicios</h1>

        <div class="grid grid-cols-2 gap-4">
            @foreach ($ejercicios as $ejercicio)
                @if ($ejercicio->teacher !== null || now() < \Carbon\Carbon::parse($ejercicio->time_max_accept))
                    <div class="border rounded-lg border-azul-bonito">
                        <table class="min-w-full">
                            <tr>
                                <td>
                                    <div>
                                        <img src="{{ $ejercicio->url }}" alt="Imagen del ejercicio"
                                            class="m-2 w-28 h-28 rounded-md object-cover cursor-pointer"
                                            id="imagen-{{ $ejercicio->id }}">
                                    </div>
                                    <div id="imagen-ampliada"
                                        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 hidden">
                                        <img src="" alt="Imagen ampliada" id="imagen-ampliada-src"
                                            class="max-w-full max-h-full">
                                    </div>
                                </td>
                                <td class="align-top">
                                    @foreach ($users->where('id', $ejercicio->user_id) as $user)
                                        <p><b>Enviado por:</b>
                                            @if ($user->username)
                                                {{ $user->username }}
                                            @else
                                                {{ $user->name }}
                                            @endif
                                        </p>
                                    @endforeach
                                    <p><b>Fecha límite:</b>
                                        {{ \Carbon\Carbon::parse($ejercicio->time_max_accept)->diffForHumans() }}
                                        <span class="text-gray-500 text-sm italic">(para el dia
                                            {{ \Carbon\Carbon::parse($ejercicio->time_max_accept)->format('d/m') }}
                                            hasta las
                                            {{ \Carbon\Carbon::parse($ejercicio->time_max_accept)->format('H:i') }})</span>
                                    </p>
                                    <p><b>Valor sugerido por estudiante:</b> {{ $ejercicio->suggested_value_usd }} USD
                                    </p>
                                    @foreach ($sectors->where('id', $ejercicio->sector_id) as $sector)
                                        <p><b>Sector de Matemáticas:</b> {{ $sector->id }}) {{ $sector->name }}</p>
                                    @endforeach
                                    <p><b>Descripción:</b> {{ $ejercicio->description }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="pb-0">         
                                    @livewire('solve-exercise-button', ['ejercicio' => $ejercicio])
                                </td>
                            </tr>
                        </table>
                    </div>
                @endif
            @endforeach
        </div>
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
