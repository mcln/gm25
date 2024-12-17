<div>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 py-8">
        <div class="rounded-lg grid py-4 px-4 bg-azul-oscuro">
            <h1 class="text-2xl font-semibold text-white">Ejercicios guardados</h1>
            <table class="mt-4">
                @foreach ($directories as $directory)
                <tr>
                    <td class="col-span-full text-left font-bold text-white py-2 pl-10 bg-azul-semi rounded-lg flex items-center justify-between">
                        <span>{{ $directory }}</span>
                        <button wire:click="editDirectory('{{ $directory }}')" class="mr-4 bg-azul-claro hover:bg-azul-muyclaro text-azul-oscuro font-bold py-1 px-3 rounded-full flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            <span>Editar</span>
                        </button>
                    </td>
                    <td>
                        <button onclick="showAlert('{{ $directory }}')"
                            class="ml-4 bg-azul-claro hover:bg-azul-muyclaro text-azul-oscuro font-bold py-1 px-3 rounded-full flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            <span>Eliminar</span>
                        </button>
                    </td>
                </tr>
                    <tr>
                        <td class="h-0.5"></td>
                    </tr>
                    @foreach ($exercises[$directory] as $exercise)
                        <tr>
                            <td class="w-full"> <a href="{{ route('exercises.show', $exercise->id) }}"
                                    class="h-10 shadow-xl rounded-lg w-400 h-300 flex items-center"
                                    style="background-image: url({{ asset(Storage::url($background_cuadros->image_path)) }})">
                                    <img src="{{ asset(Storage::url($exercise->header_exercise->image_path)) }}"
                                        alt="Click para ver ejercicio" class="ml-10 float-left"></a></td>
                            <td class="w-auto"><button onclick="showAlertDeleteExercise({{ $exercise->id }})"
                                class="ml-4 bg-azul-claro hover:bg-azul-muyclaro text-azul-oscuro font-bold py-1 px-3 rounded-full flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                <span>Eliminar</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="h-0.5"></td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>

    <div class="fixed z-10 inset-0 overflow-y-auto bg-azul-oscuro bg-opacity-50" style="display:{{ $showModal ? 'block' : 'none' }}">
        <div class="flex items-center justify-center min-h-screen">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                        Editar nombre del directorio
                    </h3>
                    <div class="mt-2">
                        <input wire:model.live="newDirectoryName"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button wire:click="$set('showModal', false)" type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancelar
                    </button>
                    <button wire:click="updateDirectory" type="button"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Guardar
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script>
        function showAlert(directory) {
            Swal.fire({
                title: '¿Estas seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminalo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.deleteDirectory(directory)

                    Swal.fire(
                        'Eliminado!',
                        'Tu directorio fue eliminado',
                        'success'
                    )
                }
            })
        }
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script>
        function showAlertDeleteExercise(exercise_id) {
            Swal.fire({
                title: '¿Estas seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminalo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.deleteExercise(exercise_id)

                    Swal.fire(
                        'Eliminado!',
                        'Tu ejercicio fue eliminado',
                        'success'
                    )
                }
            })
        }
    </script>
</div>
