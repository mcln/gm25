<x-app-layout>
    <div class="div-ampliar mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl font-bold mt-8 mb-4">Mis ejercicios subidos</h1>
        @foreach ($ejercicios as $ejercicio)
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
                            <p><b>Fecha de publicación:</b>
                                {{ $ejercicio->created_at->locale('es')->isoFormat('DD [de] ') }}
                                {{ mb_convert_case($ejercicio->created_at->locale('es')->isoFormat('MMMM'), MB_CASE_TITLE, 'UTF-8') }}
                                {{ $ejercicio->created_at->locale('es')->isoFormat(' [del] YYYY') }}
                                a las
                                {{ $ejercicio->created_at->format('H:i') }}
                                ({{ $ejercicio->created_at->diffForHumans() }})
                            </p>
                            <p><b>Fecha límite:</b>
                                {{ \Carbon\Carbon::parse($ejercicio->time_max_accept)->diffForHumans() }}
                                <span class="text-gray-500 text-sm italic">(para el dia
                                    {{ \Carbon\Carbon::parse($ejercicio->time_max_accept)->format('d/m') }}
                                    hasta las
                                    {{ \Carbon\Carbon::parse($ejercicio->time_max_accept)->format('H:i') }})</span>
                            </p>

                            <p><b>Descripción:</b> {{ $ejercicio->description }}
                            </p>

                            <div>
                                <table class="w-full text-left">
                                    <thead>
                                        <tr>
                                            <th class="w-1/5">Perfil del Profesor</th>
                                            <th class="w-1/5">Nombre de usuario</th>
                                            <th class="w-1/5">Valoración</th>
                                            <th class="w-1/5">Valor</th>
                                            <th class="w-1/5">Elegir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ejercicio->upload_exercises_postulates as $postulate)
                                            @if ($user = App\Models\User::find($postulate->user_id))
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('profile.teacher', ['id' => $user->id]) }}">
                                                            <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                                class="w-12 h-12 rounded-full">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('profile.teacher', ['id' => $user->id]) }}">
                                                            <span>{{ ucwords($user->name) }}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        {{ $postulate->horas_desarrollo }}
                                                    </td>
                                                    <td>
                                                        {{ $postulate->valor_dolar }} $USD
                                                    </td>
                                                    <td>
                                                        @if ($ejercicio->teacher_id === null)
                                                            @livewire('choose-exercise-postulate-button', ['exerciseId' => $ejercicio->id, 'postulateId' => $postulate->id])
                                                        @else
                                                            <button
                                                                class="bg-gray-500 text-white font-bold py-2 px-4 rounded"
                                                                disabled>
                                                                Seleccionado
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </td>
                    </tr>
                </table>
            </div>
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