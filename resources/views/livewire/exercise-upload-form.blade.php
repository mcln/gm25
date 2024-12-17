<div>
    <form wire:submit="submitForm" enctype="multipart/form-data">
        @csrf
        <x-errors class="mb-6" />

        <x-card>
            <div class="mb-4">
                <x-label for="file" class="block text-azul-oscuro text-lg"><b>Adjunta la imagen de los ejercicios a
                        resolver</b></x-label>
                <x-input label="Archivos aceptados: pdf, doc/docx, jpeg/jpg, png, gif" type="file" id="file"
                    wire:model.live="file" accept=".pdf,.doc,.docx,.jpeg,.jpg,.png,.gif" />
            </div>

            <div class="mb-4">
                <x-label for="descripcion" class="block text-azul-oscuro text-lg"><b>Por favor, proporciona una
                        descripción del ejercicio o guía</b></x-label>
                <x-textarea name="descripcion" id="descripcion" rows="1"
                    label="Incluir cualquier información relevante que el profesor deba saber sobre el contenido que se envía."
                    wire:model.live="descripcion"></x-textarea>
            </div>

            <div class="grid grid-cols-3 gap-8 mb-2">
                {{-- Fecha Límite --}}
                <div>
                    <x-label for="fecha_entrega" class="block text-azul-oscuro text-lg"><b>¿Cuál es la fecha límite para
                            resolverlo?</b></x-label>
                    <x-datetime-picker label="* Sujeto a disponibilidad de profesores" without-time id="date"
                        name="date" placeholder="Mínimo 1 día de plazo para agendar" :min="now()
                            ->addDays(1)
                            ->format('d-m-Y')" wire:model.live="date"/>
                </div>

                {{-- Valor a pagar --}}
                <div>
                    <x-label for="valor_pagar" class="block text-azul-oscuro text-lg"><b>Establece el valor en
                            dólares</b></x-label>
                    <x-inputs.currency label="que considerarías justo para este servicio" id="currency" name="currency"
                        thousands="." decimal="," icon="currency-dollar" suffix="USD" precision="0" wire:model.live="currency"/>
                </div>

                {{-- Sector de Mate --}}
                <div>
                    <x-label for="mat_sector" class="block text-azul-oscuro text-lg"><b>¿A cuál sector de las
                            matemáticas</b></x-label>
                    <x-native-select label="corresponde tu documento?" name="sector" id="sector"
                        placeholder="Selecciona un sector" :options="$sectors" option-label="name" option-value="name"
                        wire:model.live="sector" />
                </div>
            </div>

            <button wire:click="upload" type="button"
                class="w-full bg-azul-electrico hover:bg-azul-oscuro text-white font-bold py-2 px-4 rounded-3xl focus:outline-none focus:shadow-outline mt-4">
                Subir Archivo
            </button>
        </x-card>
    </form>

    <script>
        function showAlert(event) {
            event.preventDefault(); // Detener el envío del formulario predeterminado
    
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, envíalo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('submit-button').form.submit(); // Enviar el formulario manualmente
                    Swal.fire(
                        '¡Enviado!',
                        'Tu solicitud ya esta en nuestro portal de profesores',
                        'Muchas gracias por confiar en nosotros'
                    )
                }
            })
        }
    </script>
</div>
