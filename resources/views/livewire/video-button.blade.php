<div>
    {{-- boton para web y tablets --}}
    <div class="hidden sm:block">
        <div class="flex items-center">
            <x-button xs rounded wire:click.prevent="openVideo()" id="open-video"
                class="flex-shrink-0 bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none w-22">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none"
                    viewBox="0 0 24 24" stroke="#0F4069" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>Ver video
            </x-button>
        </div>
    </div>

    {{-- boton para mobiles --}}
    <div class="sm:hidden">
        <x-button.circle xs rounded wire:click.prevent="openVideo()" id="open-video"
            class="flex-shrink-0 bg-azul-claro hover:bg-azul-muyclaro text-azul-bonito font-bold mr-2 border-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none"
                viewBox="0 0 24 24" stroke="#0F4069" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
        </x-button.circle>
    </div>

    <script>
        window.addEventListener('load', () => {
            window.addEventListener('open-video', event => {
                const iframe = event.detail.iframe;
                const width = 570;
                const height = 350;
                const left = 1000;
                const top = 400;
                const popup = window.open('', 'popup',
                    `width=${width}, height=${height}, top=${top}, left=${left}, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO`
                );
                popup.document.body.innerHTML = iframe;
            });
        });
    </script>
</div>
