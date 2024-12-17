<div>
{{-- boton para web y tablets --}}
<div class="hidden sm:block">
    <div class="flex items-center">
        <x-button xs rounded wire:click="toggleLike" id="open-video"
            class="flex-shrink-0 bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none w-22">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="#0F4069" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg><span>{{ $exercise->likes_count }}</span><span class="ml-1">Me gusta</span>
        </x-button>
    </div>        
</div>

{{-- boton para mobiles --}}
<div class="sm:hidden">
        <x-button.circle xs rounded wire:click="toggleLike" id="open-video"
            class="bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="#0F4069" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </x-button.circle>   
</div>

    

    @if ($showAlert)
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
                <div class="inline-block align-bottom bg-azul-claro rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                    <div>
                        <div class="mx-auto flex items-center justify-center h-6 w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="#DC2626">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="mt-1 text-center sm:mt-5">
                            <h3 class="text-base leading-6 font-medium text-gray-900">
                                Para dar "me gusta" a un ejercicio, necesitas iniciar sesión.
                            </h3>
                            <div class="mt-2">
                                <a href="{{ route('login') }}" class="text-sm font-medium text-azul-oscuro hover:text-red-500">
                                    Iniciar sesión
                                </a>
                                <span class="ml-2 mr-2 text-sm font-medium text-gray-500">o</span>
                                <a href="{{ route('register') }}" class="text-sm font-medium text-azul-oscuro hover:text-red-500">
                                    Registrarse
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>


