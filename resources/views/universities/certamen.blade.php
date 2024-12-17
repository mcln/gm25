<x-AppLayout>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold mb-4 text-center">{{ $certamen->name }}</h1>

            <div class="space-y-4">
                @foreach ($headers as $header)
                    <div class="border rounded-lg overflow-hidden relative flex justify-center">
                        <!-- Imagen del certamen en tamaño original -->
                        <img src="{{ asset('storage/' . $header->image_path) }}" alt="Imagen del certamen"
                             class="h-auto" usemap="#mapa-ejercicios-{{ $header->id }}" style="max-width: none; height: auto;">
                        
                        <!-- Crear el mapa de ejercicios sobre la imagen -->
                        <map name="mapa-ejercicios-{{ $header->id }}">
                            @foreach ($exercises as $exercise)
                                @if ($exercise->coords)
                                    <!-- Area clicable para cada ejercicio con sus coordenadas -->
                                    <area shape="rect" coords="{{ $exercise->coords }}"
                                          href="{{ route('universities.show', ['exercise_id' => $exercise->id]) }}"
                                          alt="Ejercicio {{ $exercise->id }}" style="cursor: pointer;">
                                @endif
                            @endforeach
                        </map>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-AppLayout>


{{-- 
    VISTA ANTIGUA PARA VER PDF
    VISTA ANTIGUA PARA VER PDF
    VISTA ANTIGUA PARA VER PDF




    <x-AppLayout>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="sticky top-0 z-10 mt-2">
            <!-- Contenedor para los controles de paginación -->
            <div class="flex rounded-t-lg bg-azul-bonito py-2 px-2 items-center justify-center space-x-2">
                <!-- Botón de página anterior -->
                <button id="prev-page"
                    class="inline-flex items-center bg-azul-bonito hover:bg-azul-electrico text-white font-bold py-1 px-3 rounded-full"
                    style="display: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="#ffffff">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                            clip-rule="evenodd" />
                    </svg>
                    <span id="prev-page-text">Página Anterior</span>
                </button>

                <!-- Botón de página siguiente -->
                <button id="next-page"
                    class="inline-flex items-center bg-azul-bonito hover:bg-azul-electrico text-white font-bold py-1 px-3 rounded-full"
                    style="display: none;">
                    <span id="next-page-text">Página Siguiente</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" viewBox="0 0 20 20" fill="#ffffff">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <!-- Menú de ejercicios horizontal -->
            @livewire('exercises-menu', ['exerciseId' => $header->exercise_university_id, 'type' => 1])
        </div>
        <div class="mt-2">
            <!-- Contenedor para el visor PDF centrado -->
            <div class="rounded-lg py-4 px-4 bg-azul-bonito">
                <div id="pdf-viewer" class="flex justify-center text-center"></div>
            </div>
        </div>
    </div>


    <script type="module">
        // Importación de funciones y configuraciones de PDF.js
        import {
            getDocument,
            GlobalWorkerOptions
        } from '{{ asset('js/pdfjs/pdf.mjs') }}';

        // Configuración del worker de PDF.js
        GlobalWorkerOptions.workerSrc = '{{ asset('js/pdfjs/pdf.worker.mjs') }}';

        // Ruta del archivo PDF que se va a cargar
        const pdfPath = "{{ asset(Storage::url($header->image_path)) }}";

        // Tarea para cargar el documento PDF
        const loadingTask = getDocument(pdfPath);

        loadingTask.promise.then(function(pdf) {
            let pageNum = 1; // Número de página actual
            const totalPages = pdf.numPages; // Total de páginas en el PDF

            /**
             * Renderiza una página específica del PDF en un elemento canvas.
             * @param {number} num - El número de la página que se va a renderizar.
             */
            function renderPage(num) {
                pdf.getPage(num).then(function(page) {
                    const scale = 1.5; // Escala de zoom del PDF
                    const viewport = page.getViewport({
                        scale
                    }); // Obtiene la vista de la página con la escala aplicada

                    const canvas = document.createElement(
                        'canvas'); // Crea un elemento canvas para renderizar la página
                    const context = canvas.getContext('2d'); // Obtiene el contexto 2D del canvas
                    canvas.height = viewport
                        .height; // Establece la altura del canvas según la vista de la página
                    canvas.width = viewport
                        .width; // Establece el ancho del canvas según la vista de la página

                    const viewer = document.getElementById(
                        'pdf-viewer'); // Obtiene el contenedor del canvas
                    viewer.innerHTML = ''; // Limpia el contenido del contenedor
                    viewer.appendChild(canvas); // Añade el canvas al contenedor

                    const renderContext = {
                        canvasContext: context, // Contexto del canvas
                        viewport: viewport // Vista de la página
                    };
                    page.render(renderContext); // Renderiza la página en el canvas
                });
            }

            /**
             * Actualiza la visibilidad de los botones de navegación y el texto mostrado.
             */
            function updatePageInfo() {
                document.getElementById('prev-page').style.display = (pageNum > 1) ? 'inline-flex' :
                    'none'; // Muestra u oculta el botón de página anterior
                document.getElementById('next-page').style.display = (pageNum < totalPages) ? 'inline-flex' :
                    'none'; // Muestra u oculta el botón de página siguiente
                document.getElementById('prev-page-text').textContent = (pageNum === 1) ? '' :
                    'Página Anterior'; // Actualiza el texto del botón de página anterior
                document.getElementById('next-page-text').textContent = (pageNum === totalPages) ? '' :
                    'Página Siguiente'; // Actualiza el texto del botón de página siguiente
            }

            // Renderiza la primera página al cargar
            renderPage(pageNum);
            updatePageInfo();

            // Event listener para el botón de página anterior
            document.getElementById('prev-page').addEventListener('click', function() {
                if (pageNum <= 1) return; // No hace nada si ya está en la primera página
                pageNum--; // Decrementa el número de página
                renderPage(pageNum); // Renderiza la nueva página
                updatePageInfo(); // Actualiza la información de la página
            });

            // Event listener para el botón de página siguiente
            document.getElementById('next-page').addEventListener('click', function() {
                if (pageNum >= totalPages) return; // No hace nada si ya está en la última página
                pageNum++; // Incrementa el número de página
                renderPage(pageNum); // Renderiza la nueva página
                updatePageInfo(); // Actualiza la información de la página
            });

            // Previene el menú contextual al hacer clic derecho en el contenedor del canvas
            document.getElementById('pdf-viewer').addEventListener('contextmenu', function(e) {
                e.preventDefault(); // Evita que se muestre el menú contextual
            });

        }).catch(function(error) {
            console.error('Error al cargar el PDF:', error); // Manejo de errores en caso de fallo al cargar el PDF
        });
    </script>
</x-AppLayout>
 --}}