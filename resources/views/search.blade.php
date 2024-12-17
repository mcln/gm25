<x-AppLayout>

    <div class="my-8 mx-auto max-w-7xl">
        <h1 class="text-2xl font-bold mb-4">Resultados de la búsqueda: "{{ $searchTerm }}"</h1>

        <div class="flex mb-4 space-x-4">
            @if ($exerciseResults->isNotEmpty())
                <a href="#exercise-results"
                    class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Ejercicios</a>
            @endif

            @if ($sectorResults->isNotEmpty())
                <a href="#sector-results"
                    class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Sector</a>
            @endif

            @if ($chapterResults->isNotEmpty())
                <a href="#chapter-results"
                    class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Capítulos</a>
            @endif

            @if ($sectionResults->isNotEmpty())
                <a href="#section-results"
                    class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Secciones</a>
            @endif

            @if ($itemResults->isNotEmpty())
                <a href="#item-results"
                    class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Items</a>
            @endif
        </div>

        @if ($exerciseResults->isNotEmpty())
            <div id="exercise-results" class="mb-4">
                <h2 class="text-xl font-bold">Ejercicios</h2>
                @foreach ($exerciseResults as $exercise)
                    @php
                        $formattedSlug = str_replace('-', ' ', $exercise->slug);
                    @endphp
                    <p><a href="{{ route('exercises.show', $exercise) }}">{{ $formattedSlug }}</a></p>
                @endforeach
            </div>
        @endif

        @if ($sectorResults->isNotEmpty())
            <div id="sector-results" class="mb-4">
                <h2 class="text-xl font-bold">Sector</h2>
                @foreach ($sectorResults as $sector)
                    <p><a href="{{ route('exercises.sector', $sector) }}">{{ $sector->name }}</a></p>
                @endforeach
            </div>
        @endif

        @if ($chapterResults->isNotEmpty())
            <div id="chapter-results" class="mb-4">
                <h2 class="text-xl font-bold">Capítulos</h2>
                @foreach ($chapterResults as $chapter)
                    <p><a href="{{ route('exercises.chapter', $chapter) }}">{{ $chapter->name }}</a></p>
                @endforeach
            </div>
        @endif

        @if ($sectionResults->isNotEmpty())
            <div id="section-results" class="mb-4">
                <h2 class="text-xl font-bold">Secciones</h2>
                @foreach ($sectionResults as $section)
                    <p><a href="{{ route('exercises.section', $section) }}">{{ $section->name }}</a></p>
                @endforeach
            </div>
        @endif

        @if ($itemResults->isNotEmpty())
            <div id="item-results" class="mb-4">
                <h2 class="text-xl font-bold">Items</h2>
                @foreach ($itemResults as $item)
                    <p><a href="{{ route('exercises.item', $item) }}">{{ $item->name }}</a></p>
                @endforeach
            </div>
        @endif

        @if (
            $exerciseResults->isEmpty() &&
                $sectorResults->isEmpty() &&
                $chapterResults->isEmpty() &&
                $sectionResults->isEmpty() &&
                $itemResults->isEmpty())
            <p>No se encontraron resultados.</p>
        @endif
    </div>

    <!-- Botón flotante para volver al principio -->
    <div class="fixed bottom-4 left-4 w-20 h-12 bg-gray-800 text-white flex justify-center items-center rounded-full cursor-pointer transition-opacity duration-300 opacity-100"
        id="back-to-top" onclick="scrollToTop()">
        <span class="mr-1">&#8593;</span>
        <span>Subir</span>
    </div>

    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>

</x-AppLayout>
