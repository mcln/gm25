<div>
    <button class="bg-blue-500 w-full text-white font-bold py-2 px-4 rounded" wire:click="abrirModal">Postular</button>

    <!-- Modal -->
    <div class="fixed z-10 inset-0 overflow-y-auto flex items-center justify-center"
        style="display: {{ $showModal ? 'flex' : 'none' }}">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-azul-oscuro bg-opacity-50"></div>
        </div>
        <div
            class="bg-azul-claro rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
            <div class="bg-azul-claro px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="text-center">
                    <h3 class="text-3xl font-bold text-gray-900">Resolver Ejercicios</h3>
                    <p class="text-sm text-gray-500 mt-2">Completa los siguientes campos:</p>
                </div>
                <div class="mt-2">
                    <p for="valor" class="block text-sm font-medium text-gray-700">Establece el valor:
                    <span class="text-sm text-gray-500">Sugerido: {{ $ejercicio->suggested_value_usd }} USD</span></p>
                    <input wire:model.live="valor" type="text" id="valor" name="valor"
                        class="mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
                    @error('valor')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-2">
                    <p class="block text-sm font-medium text-gray-700">
                        <input wire:model.live="acepto" type="checkbox" class="form-checkbox">
                        Acepto resolverlo antes de:
                        <span class="text-sm text-gray-500">Fecha límite:
                            {{ \Carbon\Carbon::parse($ejercicio->time_max_accept)->format('H:i') }} -
                            {{ \Carbon\Carbon::parse($ejercicio->time_max_accept)->format('d/m/y') }}</span>
                        @error('acepto')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </p>
                </div>
            </div>
            <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button wire:click="resolverGuia" type="button"
                    class="w-full sm:w-auto inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mt-3 sm:mt-0 sm:ml-3 sm:text-sm">
                    Acepto
                </button>
                <button wire:click="cerrarModal" type="button"
                    class="w-full sm:w-auto inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-3 sm:mt-0 sm:ml-3 sm:text-sm">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>
