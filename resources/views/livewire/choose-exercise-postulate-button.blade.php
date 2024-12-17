<div>
    <form wire:submit="choose">
        @csrf
        <input type="hidden" name="exerciseId" value="{{ $exerciseId }}">
        <input type="hidden" name="postulateId" value="{{ $postulateId }}">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Elegir
        </button>
    </form>
</div>
