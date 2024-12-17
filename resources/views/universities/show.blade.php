<x-AppLayout>
    <link rel="stylesheet" href="{{ asset('css/zoom.css') }}">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">
        <div class="rounded-lg bg-azul-bonito py-4 px-4 mb-4">
            <!-- Sección de Encabezado -->
            <div class="image-section rounded-lg flex items-center"
                style="background-image: url({{ asset(Storage::url($background_cuadros->image_path ?? '')) }})">
                @if (!empty($headerImageUrl))
                    <!-- Vista para web y tablets -->
                    <div class="hidden sm:block">
                        <img src="{{ $headerImageUrl }}" alt="Encabezado del Ejercicio" class="ml-10"
                            oncontextmenu="return false;">
                    </div>
                    <!-- Vista para móviles -->
                    <div class="sm:hidden">
                        <img src="{{ $headerImageUrl }}" alt="Encabezado del Ejercicio"
                            class="object-fill w-full h-full" oncontextmenu="return false;">
                    </div>
                @endif
            </div>

            <!-- Sección de Desarrollo -->
            <div class="image-section h-6 rounded-lg flex items-center bg-azul-muyclaro py-1 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 h-5 w-5" viewBox="0 0 20 20" fill="#0F4069">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                        clip-rule="evenodd" />
                </svg>
                <span class="ml-4 font-bold italic text-azul-oscuro">Desarrollo</span>
            </div>

            <!-- Imágenes de Desarrollo -->
            @foreach ($developmentImageUrls as $index => $developmentImageUrl)
                <div class="image-section rounded-lg w-400 h-300 flex items-center mt-1"
                    style="background-image: url({{ asset(Storage::url($background_cuaderno->image_path ?? '')) }})">
                    @if (!empty($developmentImageUrl))
                        <img src="{{ $developmentImageUrl }}" alt="Desarrollo {{ $index + 1 }}" class="ml-12"
                            oncontextmenu="return false;">
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-AppLayout>
