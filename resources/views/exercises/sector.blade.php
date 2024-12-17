<x-AppLayout>
    <div class="div-ampliar mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">  

        <div class="flex flex-col rounded-lg bg-azul-bonito py-2 px-4 items-center sm:flex-row sm:items-center">
            <div class="inline-flex items-center bg-morado-normal text-white font-bold py-1 px-3 rounded-full text-xs md:text-base">
                {{ ucfirst($chapters->first()->sector->name) }}
            </div>
        </div>
        <div class="mb-4"></div>
        <div class="rounded-lg grid grid-cols-1 gap-1 py-4 px-4 bg-azul-bonito">
            @php $i = 1 @endphp
            @foreach ($chapters as $chapter)
                <a href="{{ route('exercises.chapter', ['chapter' => $chapter->id]) }}" class="bg-white hover:bg-azul-claro rounded-lg">
                    <span class="text-xs md:text-base font-medium text-gray-900 pl-4">{{ $i++ }}. {{ ucfirst($chapter->name) }}</span>
                </a>
            @endforeach
        </div>
    </div>
</x-AppLayout>