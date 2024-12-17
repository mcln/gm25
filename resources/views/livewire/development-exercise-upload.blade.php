<div>
    <h2>Cargar archivos</h2>

    {{-- <div>
        <input type="file" wire:change="filesChosen(0, $event.target.files)" multiple accept=".pdf, .doc, .docx, .jpeg, .jpg, .png, .gif">
        <input type="text" wire:model.live="comments.0" placeholder="Agregar un comentario">
    </div> --}}

    @for ($i = 1; $i < count($files); $i++)
        <div>
            <input type="file" wire:change="filesChosen({{ $i }}, $event.target.files)" multiple accept=".pdf, .doc, .docx, .jpeg, .jpg, .png, .gif">
            <input type="text" wire:model.live="comments.{{ $i }}" placeholder="Agregar un comentario">
        </div>
    @endfor

    @if (count($files) < 100)
        <button class="bg-azul-electrico hover:bg-azul-oscuro text-white font-bold py-2 px-4 rounded-3xl focus:outline-none focus:shadow-outline mt-4"
            wire:click="addFileInput" wire:loading.attr="disabled">
            Agregar otro archivo
        </button>
    @endif

    <button class="bg-azul-electrico hover:bg-azul-oscuro text-white font-bold py-2 px-4 rounded-3xl focus:outline-none focus:shadow-outline mt-4"
        wire:click="uploadFiles" wire:loading.attr="disabled">
        Subir archivos
    </button>
</div>
