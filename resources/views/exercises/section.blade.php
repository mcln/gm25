<x-AppLayout>
    <div class="div-ampliar mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">  

        <div class="flex flex-col rounded-lg bg-azul-bonito py-2 px-4 items-center sm:flex-row sm:items-center">
            <a href="{{ route('exercises.sector', $items->first()->section->chapter->sector->id) }}" class="inline-flex items-center bg-azul-bonito hover:bg-azul-electrico text-white font-bold py-1 px-3 rounded-full text-xs md:text-base">
                {{ ucfirst($items->first()->section->chapter->sector->name) }}
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:inline-block hidden mx-2" fill="none" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a href="{{ route('exercises.chapter', $items->first()->section->chapter->id) }}" class="inline-flex items-center bg-azul-bonito hover:bg-azul-electrico text-white font-bold py-1 px-3 rounded-full text-xs md:text-base">
                {{ ucfirst($items->first()->section->chapter->name) }}
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:inline-block hidden mx-2" fill="none" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <div class="inline-flex items-center bg-morado-normal text-white font-bold py-1 px-3 rounded-full text-xs md:text-base">
                {{ ucfirst($items->first()->section->name) }}
            </div>    
            
        </div>
        
        <div class="mb-4"></div>
        <div class="rounded-lg grid grid-cols-1 gap-1 py-4 px-4 bg-azul-bonito">
            @php $i = 1 @endphp
            @foreach ($items as $item)
                <a href="{{ route('exercises.item', ['item' => $item->id]) }}" class="bg-white hover:bg-azul-claro rounded-lg">
                    <span class="text-xs md:text-base font-medium text-gray-900 pl-3">{{ $i++ }}. {{ ucfirst($item->name) }}</span>
                </a>
            @endforeach
          </div>
    </div>
</x-AppLayout>