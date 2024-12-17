<div>
    <div class="my-8 flex justify-center">
        <div class="lg:w-3/4 sm:w-11/12">
            @php
                // Inicializamos variables de conteo
                $sectorNumber = 0;
                $itemNumber = 1;
            @endphp


            @foreach ($sectors as $sector)
                <!-- SECTORS -->
                {{-- <h2 class="text-xl font-bold text-center bg-azul-bonito text-white p-2 rounded-lg ml-1 mr-1">
                    </h2> --}}
                <x-card title="SECTOR {{ ++$sectorNumber }}: {{ $sector->name }}">
                    <div class="grid grid-cols-1 md:grid-cols-4">
                        @foreach ($sector->chapters as $chapter)
                            @php
                                // Inicializamos variable de conteo para secciones
                                $sectionCount = 'A';
                            @endphp

                            @if ($loop->iteration == 5 || $loop->iteration == 9 || $loop->iteration == 13 || $loop->iteration == 17)
                                <!-- Si el índice del bucle actual es divisible por 5, cerramos el contenedor actual y abrimos uno nuevo -->
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4">
            @endif

            <div>
                @php
                    // Formateamos el número de capítulo para agregar el cero inicial si es necesario y agregar un guión al final
                    $chapterNumberStr = str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) . ' -';
                @endphp

                <!-- CHAPTERS -->
                <p class="p-1 text-center rounded-t-lg mx-1 my-1 bg-azul-claro hover:bg-morado-normal hover:text-white cursor-pointer"
                    onclick="toggleSections('section{{ $chapter->id }}')">
                    {{ $chapterNumberStr }} {{ $chapter->name }}</p>

                @foreach ($chapter->sections as $section)
                    <div class="section{{ $chapter->id }} hidden">
                        @php
                            // Creamos el nombre de la sección concatenando el contador de secciones y el nombre de la sección actual
                            $sectionName = '<strong>' . $sectionCount++ . ']</strong> ' . $section->name;
                            $itemNumberInSection = 1;
                        @endphp

                        <div class="border p-1 mr-1 ml-1 mb-1 border-azul-claro">
                            <!-- SECTIONS -->
                            <p class="text-xs text-left p-1 hover:bg-morado-normal hover:text-white cursor-pointer section-name"
                                onclick="toggleItems(this.nextElementSibling)">
                                {!! $sectionName !!}
                            </p>

                            <div class="section-content hidden">
                                @foreach ($section->items as $item)
                                    <!-- Mostramos el nombre del ítem actual de la sección actual -->
                                    <!-- ITEMS -->
                                    
                                    <div class="text-xs" style="display: table;">
                                        <span class="text-gray-500 font-bold" style="display: table-cell; padding-right: 10px;">{{ $itemNumberInSection++ }}.</span>
                                        <a href="{{ route('exercises.item', ['item' => $item->id]) }}" class="hover:text-morado-normal" style="display: table-cell;">
                                            {{ $item->name }}
                                        </a>
                                    </div>
                                @endforeach

                                @php $itemNumber += $itemNumberInSection - 1; @endphp
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
        </x-card>
        <div class="mb-4"></div>
        @endforeach

    </div>
    </div>

    <script>
        function toggleSections(sectionClass) {
            var sections = document.getElementsByClassName(sectionClass);
            for (var i = 0; i < sections.length; i++) {
                var section = sections[i];
                section.classList.toggle('hidden');
            }
        }

        function toggleItems(content) {
            content.classList.toggle('hidden');
        }
    </script>
</div>
