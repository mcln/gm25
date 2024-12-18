<div wire:ignore x-data x-init="() => {
    const post = FilePond.create($refs.input);
    post.setOptions({
        allowMultiple: {{ $attributes->has('multiple') ? 'true' : 'false' }},
        server: {
            process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                @this.upload('{{ $attributes->whereStartsWith('wire:model.live')->first() }}', file, load, error, progress)
            },
            revert: (filename, load) => {
                @this.removeUpload('{{ $attributes->whereStartsWith('wire:model.live')->first() }}', filename, load)
            },
            allowImagePreview: {{ $attributes->has('allowFileTypeValidation') ? 'true' : 'false' }},
            imagePreviewMaxHeight: {{ $attributes->has('imagePreviewMaxHeight') ? $attributes->get('imagePreviewMaxHeight') : '256' }},
            acceptedFileTypes: {!! $attributes->get('acceptedFileTypes') ?? 'null' !!},
        }
    });
}">
    <input type="file" x-ref="input" name="file"  />

</div>
