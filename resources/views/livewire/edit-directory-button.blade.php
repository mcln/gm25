<div>
    <button wire:click="editDirectory" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Editar directorio
    </button>
    @if ($editing)
        <div class="mt-4">
            <input wire:model.live="newDirectory" type="text" class="border rounded py-2 px-4">
            <button wire:click="saveDirectory"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Guardar
            </button>
        </div>
    @endif

</div>
