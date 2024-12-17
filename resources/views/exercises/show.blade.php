<x-AppLayout>
    @php $anchoCompleto = false; @endphp
    <div class="div-ampliar mx-auto {{ $anchoCompleto ? '' : 'max-w-7xl' }} px-2 sm:px-6 lg:px-8 py-4"
        wire:className="{{ $anchoCompleto ? '' : 'max-w-7xl' }}">

        <div class="flex rounded-lg bg-azul-bonito py-2 px-2 items-center justify-center space-x-2">

            @if (isset($previous_exercise))
                <a href="{{ route('exercises.show', $previous_exercise->id) }}"
                    class="inline-flex items-center bg-azul-bonito hover:bg-azul-electrico text-white font-bold py-1 px-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="#ffffff">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                            clip-rule="evenodd" />
                    </svg><span class="hidden sm:block">Ejercicio Anterior</span><span class="sm:hidden">Ej. Anterior</span>
                </a>
            @endif

            @if (isset($next_exercise))
                <a href="{{ route('exercises.show', $next_exercise->id) }}"
                    class="inline-flex items-center bg-azul-bonito hover:bg-azul-electrico text-white font-bold py-1 px-3 rounded-full">
                    <span class="hidden sm:block">Ejercicio Siguiente</span><span class="sm:hidden">Ej. Siguiente</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" viewBox="0 0 20 20" fill="#ffffff">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            @endif

        </div>


        <div class="mb-2"></div>

        <div class="rounded-lg bg-azul-bonito py-4 px-4 mb-4">
            <div class="flex justify-between mb-4">
                <div class="flex">

                    @livewire('expand-button', ['anchoCompleto' => $anchoCompleto])

                    @livewire('video-button')

                    @livewire('like-button', ['exercise' => $exercise])

                    @livewire('report-button', ['exercise' => $exercise])

                    @livewire('save-exercise-button', ['exercise' => $exercise])

                </div>
                <div class="flex items-center">

                    {{-- boton para web y tablets --}}
                    <div class="hidden sm:block">
                        <x-button xs rounded href="{{ route('exercises.item', $exercise->item->id) }}"
                            class="bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none w-22">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="#0F4069" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" />
                            </svg>Volver
                        </x-button>

                        <x-button xs rounded
                            href="{{ route('exercises.sector', $exercise->item->section->chapter->sector->id) }}"
                            class="bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none w-22">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " fill="none" viewBox="0 0 24 24"
                                stroke="#0F4069" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>Cerrar
                        </x-button>
                    </div>

                    {{-- boton para mobiles --}}
                    <div class="sm:hidden">
                        <x-button.circle xs rounded href="{{ route('exercises.item', $exercise->item->id) }}"
                            class="bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="#0F4069" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" />
                            </svg>
                        </x-button.circle>

                        <x-button.circle xs rounded
                            href="{{ route('exercises.sector', $exercise->item->section->chapter->sector->id) }}"
                            class="bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="#0F4069" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </x-button.circle>
                    </div>


                </div>
            </div>

            <div class="image-section rounded-lg w-400 flex items-center"
                style="background-image: url({{ asset(Storage::url($background_cuadros->image_path ?? '')) }})">
                @empty(!$header_exercise)
                    {{-- vista de encabezado para web y tablets --}}
                    <div class="hidden sm:block">
                        <img src="{{ asset(Storage::url($header_exercise->image_path)) }}" alt="" class="ml-10"
                            oncontextmenu="return false;">
                    </div>

                    {{-- vista de encabezado para mobiles --}}
                    <div class="sm:hidden">
                        <img src="{{ asset(Storage::url($header_exercise->image_path)) }}" alt=""
                            class="object-fill w-full h-full" oncontextmenu="return false;">
                    </div>
                @endempty
            </div>

            <div class="image-section h-6 rounded-lg w-400 h-300 flex items-center bg-azul-muyclaro py-1 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 h-5 w-5" viewBox="0 0 20 20" fill="#0F4069">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                        clip-rule="evenodd" />
                </svg><span class="ml-4 font-bold italic text-azul-oscuro">Desarrollo</span>
            </div>

            {{-- vista de desarrollo para web y tablets --}}
            <div class="hidden sm:block">
                @foreach ($development_exercises as $development_exercise)
                    <div class="image-section rounded-lg w-400 h-300 flex items-center mt-1"
                        style="background-image: url({{ asset(Storage::url($background_cuaderno->image_path ?? '')) }})">
                        @if (!empty($development_exercise))
                            <img src="{{ asset(Storage::url($development_exercise->image_path)) }}" alt=""
                                class="ml-12" oncontextmenu="return false;">
                        @endif
                    </div>
                @endforeach
            </div>

            {{-- vista de desarrollo para mobiles --}}
            <div class="sm:hidden">
                @foreach ($development_exercises as $development_exercise)
                    <div class="image-section rounded-lg w-400 h-300 flex items-center mt-1 overflow-hidden">
                        @if (!empty($development_exercise))
                            <img src="{{ asset(Storage::url($development_exercise->image_path)) }}" alt=""
                                class="object-cover w-full h-full" oncontextmenu="return false;">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        @if (Auth::check())
            <form method="POST" action="{{ route('exercise.comments_store') }}" class="flex flex-col">
                @csrf
                <input type="hidden" name="exercise_id" value="{{ $exercise->id }}">
                <div class="flex items-start mb-2">
                    @if ($user->profile_photo_path)
                        <img src="{{ asset(Storage::url($user->profile_photo_path)) }}"
                            alt="Foto de perfil de {{ $user->name }}" class="w-6 h-6 rounded-full mr-2">
                    @endif
                    <div class="relative flex-grow">
                        <textarea name="comment_content" id="comment_content" rows="1"
                            class="text-xs px-2 py-1 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-500 w-full"
                            placeholder="Agrega un comentario..."></textarea>
                        <div class="flex justify-end space-x-1">
                            <button type="button" id="cancelButton"
                                class="text-xs bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-full hidden">Cancelar</button>
                            <button type="submit" id="commentButton"
                                class="text-xs bg-azul-semi hover:bg-azul-electrico text-white font-bold py-1 px-2 rounded-full hidden">Comentar</button>
                        </div>
                    </div>
                </div>
            </form>
        @endif

        @if ($exercise->exercise_comments)
            @foreach ($exercise->exercise_comments->sortByDesc(function ($comment) {
        return [$comment->exercise_comments->count(), $comment->created_at];
    }) as $comment)
                <!-- Mostrar solo los comentarios principales -->
                @if (empty($comment->parent_id))
                    <div class="comment flex items-start">
                        <div class="mr-2">
                            <img src="{{ asset(Storage::url($comment->user->profile_photo_path)) }}"
                                alt="Foto de perfil de {{ $comment->user->name }}" class="w-6 h-6 rounded-full">
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <p class="mr-2 font-bold text-xs text-azul-oscuro">{{ $comment->user->name }}</p>
                                <p class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="comment-content text-xs mb-1">
                                <p>{{ $comment->comment_content }}</p>
                            </div>
                            <div class="comment-actions">
                                <div class="flex items-center mb-2">
                                    @if ($comment->exercise_comments->count() > 0)
                                        <button
                                            class="toggle-replies text-xs flex items-center bg-transparent hover:bg-azul-claro text-azul-oscuro font-bold py-1 px-3 rounded-full">
                                            {{ $comment->exercise_comments->count() }} respuestas
                                        </button>
                                    @endif
                                    <button
                                        class="toggle-reply-form text-xs flex items-center bg-transparent hover:bg-azul-claro text-azul-oscuro font-bold py-1 px-3 rounded-full">
                                        Responder
                                    </button>
                                </div>
                                <div class="replies-container hidden ml-8">
                                    @foreach ($comment->exercise_comments as $reply)
                                        @if (!empty($reply->parent_id))
                                            <div class="comment flex items-start mb-4">
                                                <div class="mr-2">
                                                    <img src="{{ asset(Storage::url($reply->user->profile_photo_path)) }}"
                                                        alt="Foto de perfil de {{ $reply->user->name }}"
                                                        class="w-6 h-6 rounded-full">
                                                </div>
                                                <div class="flex-1">
                                                    <div class="flex items-center mb-1">
                                                        <p class="mr-2 font-bold text-xs text-azul-oscuro">
                                                            {{ $reply->user->name }}
                                                        </p>
                                                        <p class="text-xs text-gray-500">
                                                            {{ $reply->created_at->diffForHumans() }}
                                                        </p>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>{{ $reply->comment_content }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <form method="POST" action="{{ route('exercise.comments_store') }}"
                                    class="reply-form hidden">
                                    @csrf
                                    <input type="hidden" name="exercise_id" value="{{ $exercise->id }}">
                                    <div class="relative flex-grow">
                                        <textarea name="comment_content" rows="1"
                                            class="text-xs px-2 py-1 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-500 w-full"
                                            placeholder="Agrega una respuesta..."></textarea>
                                    </div>
                                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                    <div class="flex justify-end space-x-1">
                                        <button type="button"
                                            class="cancel-button text-xs bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-full">Cancelar</button>
                                        <button type="submit"
                                            class="comment-button text-xs bg-azul-semi hover:bg-azul-electrico text-white font-bold py-1 px-2 rounded-full">Comentar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</x-AppLayout>

<script src="https://kit.fontawesome.com/{YOUR_FONTAWESOME_KIT_ID}.js" crossorigin="anonymous"></script>

{{-- Botón mostrar respuestas y botón responder --}}
<script>
    var toggleButtons = document.querySelectorAll('.toggle-replies');
    toggleButtons.forEach(function(button) {
        var originalText = button.textContent.trim();
        var count = parseInt(button.textContent);
        button.addEventListener('click', function() {
            var container = button.parentNode.nextElementSibling;
            container.classList.toggle('hidden');
            if (container.classList.contains('hidden')) {
                button.textContent = originalText;
            } else {
                button.textContent = count + ' respuestas';
            }
        });
    });

    var replyButtons = document.querySelectorAll('.toggle-reply-form');
    replyButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var form = button.closest('.comment').querySelector('.reply-form');
            form.classList.toggle('hidden');
        });
    });

    var cancelButtons = document.querySelectorAll('.cancel-button');
    cancelButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var form = button.parentNode.parentNode;
            form.classList.add('hidden');
        });
    });
</script>

{{-- botones cancelar y comentar del comentario principal --}}

<script>
    const commentContent = document.getElementById('comment_content');
    const cancelButton = document.getElementById('cancelButton');
    const commentButton = document.getElementById('commentButton');

    commentContent.addEventListener('input', function() {
        const hasContent = commentContent.value.trim() !== '';
        cancelButton.classList.toggle('hidden', !hasContent);
        commentButton.classList.toggle('hidden', !hasContent);
    });

    cancelButton.addEventListener('click', function() {
        commentContent.value = '';
        cancelButton.classList.add('hidden');
        commentButton.classList.add('hidden');
    });
</script>
