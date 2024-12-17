<x-AppLayout>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">

        <div class="flex flex-col rounded-lg bg-azul-bonito py-2 px-4 items-center sm:flex-row sm:items-center">
            <a href="{{ route('exercises.sector', $item->section->chapter->sector->id) }}"
                class="inline-flex items-center bg-azul-bonito hover:bg-azul-electrico text-white font-bold py-1 px-3 rounded-full text-xs md:text-base">
                {{ ucfirst($item->section->chapter->sector->name) }}
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:inline-block hidden mx-2" fill="none"
                viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a href="{{ route('exercises.chapter', $item->section->chapter->id) }}"
                class="inline-flex items-center bg-azul-bonito hover:bg-azul-electrico text-white font-bold py-1 px-3 rounded-full text-xs md:text-base">
                {{ ucfirst($item->section->chapter->name) }}
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:inline-block hidden mx-2" fill="none"
                viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a href="{{ route('exercises.section', $item->section->id) }}"
                class="inline-flex items-center bg-azul-bonito hover:bg-azul-electrico text-white font-bold py-1 px-3 rounded-full text-xs md:text-base">
                {{ ucfirst($item->section->name) }}
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:inline-block hidden mx-2" fill="none"
                viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <span
                class="inline-flex items-center bg-morado-normal text-white font-bold py-1 px-3 rounded-full text-xs md:text-base">
                {{ ucfirst($item->name) }}
            </span>
        </div>


        <div class="mb-4"></div>
        @if ($exercises->count() > 0)
            <div class="rounded-lg grid grid-cols-1 gap-1 py-4 px-4 bg-azul-bonito">
                <div class="image-section h-7 rounded-lg w-400 h-300 flex items-center bg-azul-muyclaro py-1 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="#0F4069">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                            clip-rule="evenodd" />
                    </svg><span class="ml-1 text-xs md:text-base font-bold italic text-azul-bonito">Click en el
                        ejercicio para ver el desarrollo</span>
                </div>

                @php $totalCount = $exercises->firstItem() - 1; @endphp
                @foreach ($exercises as $exercise)
                    <div class="relative">
                        <div class="absolute top-1/2 left-3 items-center justify-center w-6 h-6 bg-gray-500 rounded-full text-white font-bold transform -translate-y-1/2 hidden md:flex">
                            <div class="flex flex-col items-center justify-center h-full">
                                {{ $totalCount + $loop->iteration }}
                            </div>
                        </div>
                        <a href="{{ route('exercises.show', $exercise) }}"
                            class="shadow-xl rounded-lg w-400 flex items-center"
                            style="background-image: url({{ asset(Storage::url($background_image->image_path)) }})">

                            @if ($exercise->Header_exercise)
                                {{-- vista de encabezado para web y tablets --}}
                                <div class="hidden sm:block">
                                    <img src="{{ asset(Storage::url($exercise->Header_exercise->image_path)) }}"
                                        alt="" class="ml-10" oncontextmenu="return false;">
                                </div>

                                {{-- vista de encabezado para mobiles --}}
                                <div class="sm:hidden">
                                    <img src="{{ asset(Storage::url($exercise->Header_exercise->image_path)) }}"
                                        class="object-fill w-full h-full" oncontextmenu="return false;">
                                </div>
                            @endif


                        </a>
                    </div>
                @endforeach

            </div>

            <div class="mt-4">
                @if ($exercises->total() > 7)
                    {{ $exercises->links() }}
                @endif
            </div>
        @else
            <div class="rounded-lg grid grid-cols-1 gap-1 py-4 px-4 bg-azul-bonito">
                <span class="font-bold italic text-white">Aún no hay ejercicios disponibles</span>
            </div>
        @endif
    </div>
</x-AppLayout>
