<div>
    {{-- boton para web y tablets --}}
    <div class="hidden sm:block">
        <x-button xs rounded wire:click="toggleAncho()"
            class="bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none w-24">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="#0F4069"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
            </svg>Expandir
        </x-button>
    </div>

    {{-- boton para mobiles --}}
    <div class="sm:hidden">
        <x-button xs rounded wire:click="toggleAncho()"
            class="bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="#0F4069" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
            </svg>
        </x-button>
    </div>

    <script>
        document.addEventListener('livewire:init', function() {
            Livewire.on('anchoActualizado', (anchoCompleto) => {
                const divAmpliar = document.querySelector('.div-ampliar');
                if (anchoCompleto) {
                    divAmpliar.classList.remove('max-w-7xl');
                } else {
                    divAmpliar.classList.add('max-w-7xl');
                }
            });
        });
    </script>

</div>
