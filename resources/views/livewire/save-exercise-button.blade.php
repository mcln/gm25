<div>
    @if (auth()->check())

        {{-- boton para web y tablets --}}
        <div class="hidden sm:block">
            <x-button xs rounded wire:click="openModal"
                class="bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none w-22">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="#0F4069" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                </svg>{{ __('Guardar') }}
            </x-button>
        </div>

        {{-- boton para mobiles --}}
        <div class="sm:hidden">
            <x-button xs rounded wire:click="openModal"
                class="bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="#0F4069" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                </svg>
            </x-button>
        </div>

        <!-- Modal -->
        <div class="fixed z-10 inset-0 overflow-y-auto" style="display: {{ $showModal ? 'block' : 'none' }}">
            <div class="flex items-center justify-center min-h-screen">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-azul-oscuro opacity-50">
                    </div>
                </div>

                <!-- Modal content -->
                <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg mx-auto"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div class="bg-gray-100 px-4 py-3 flex justify-between items-center">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Guardar en...') }}
                        </h3>
                        <button wire:click="closeModal"
                            class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150 focus:outline-none">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="bg-white px-4 py-3">

                        @if (count($directories) > 0)
                            <div class="grid grid-cols-1 gap-2 sm:grid-cols-2"
                                style="max-height: 100px; overflow-y: scroll;">
                                @foreach ($directories as $directory)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" wire:model.live="selectedDirectories"
                                            value="{{ $directory->directory }}"
                                            class="ml-2 form-checkbox h-3 w-3 text-azul-electrico"
                                            wire:click="saveExerciseDirectories">
                                        <span class="text-xs ml-2 text-gray-700">{{ $directory->directory }} </span>
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-700">{{ __('No tienes ninguna lista de ejercicios guardada.') }}
                            </p>
                        @endif

                    </div>

                    <div class="mt-4 px-4 py-3 bg-gray-100">
                        <h4 class="mb-2">{{ __('Crear nueva lista') }}
                        </h4>
                        <form wire:submit="createDirectoryWithoutModal">
                            <div class="flex items-center">
                                <input type="text" wire:model="directory_name" id="directory_name"
                                    name="directory_name" placeholder="{{ __('Escribe el nombre de la lista') }}"
                                    class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 rounded focus:outline-none focus:shadow-outline">{{ __('Crear') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endif
</div>
