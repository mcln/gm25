<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-center mb-10">Resolvemos tu <span class="text-azul-electrico"
                id="changing-word">documento</span> paso a paso</h1>

        @livewire('exercise-upload-form', ['sectors' => $sectors])
    </div>

    <script>
        // Array de palabras a cambiar
        var words = ["DOCUMENTO", "EJERCICIO", "GUÍA", "TAREA", "TRABAJO", "PROBLEMA", "EJEMPLO", "EXÁMEN", "PRUEBA"]
        var currentWordIndex = 0;
        var currentLetterIndex = 0;
        var interval;
        var changingWord = document.getElementById('changing-word');

        // Función para cambiar la palabra letra por letra
        function typeWord() {
            if (currentLetterIndex <= words[currentWordIndex].length) {
                changingWord.innerHTML = words[currentWordIndex].substr(0, currentLetterIndex);
                currentLetterIndex++;
            } else {
                clearInterval(interval);
                setTimeout(changeWord, 2000); // Esperar 2 segundos antes de cambiar a la siguiente palabra
            }
        }

        // Función para cambiar la palabra
        function changeWord() {
            currentLetterIndex = 0;
            currentWordIndex = (currentWordIndex + 1) % words.length;
            interval = setInterval(typeWord, 100); // Escribir una letra cada 100 milisegundos
        }

        // Iniciar el cambio de palabra
        changeWord();
    </script>


    {{-- DROPZONE --}}
    {{-- <div id="dropzone" class="border border-gray-300 p-8 bg-gray-100 rounded-xl mx-auto mb-2">
        <input type="file" name="file" id="file" class="hidden">
        <div id="drag-text" class="flex flex-col items-center">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="#00376F" class="w-16 h-16">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
            </svg>

            <p class="text-lg font-bold text-azul-electrico">Arrastrar y soltar archivo</p>
            <p class="text-xs text-azul-oscuro">O si prefieres</p>
            <button type="button" onclick="openFileExplorer()"
                class="border-azul-oscuro border-2 hover:bg-azul-electrico hover:text-white text-azul-oscuro font-bold py-2 px-4 rounded-3xl focus:outline-none focus:shadow-outline mt-2 mb-2">
                Navegar por mis archivos
            </button>

            <input type="file" id="file-input" name="file" class="hidden"
                accept=".pdf,.doc,.docx,.jpeg,.jpg,.png,.gif">

            <div id="preview-container" class="hidden mt-4">
                <div class="flex justify-center items-center gap-2 mb-2">
                    <p id="preview-filename" class="text-azul-oscuro text-center"></p>
                    <button type="button" onclick="removeFile('preview-container')"
                        class="text-red-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="flex justify-center items-center">
                    <img id="preview-image" class="max-w-200 max-h-200 mb-2" />
                </div>
            </div>

            <div id="dropped-file" class="hidden mt-4">
                <div class="flex justify-center items-center gap-2 mb-2">
                    <p id="filename" class="text-azul-oscuro text-center"></p>
                    <button type="button" onclick="removeFile('dropped-file')" class="text-red-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                </div>
                <div class="flex justify-center items-center">
                    <img id="preview" class="max-w-200 max-h-200 mb-2" />
                </div>
            </div>

            <p class="text-xs text-azul-oscuro">Archivos aceptados: pdf, doc/docx, jpeg/jpg, png,
                gif
            </p>

        </div>
    </div>


    <style>
        #dropzone.dragover {
            background-color: #8eebfc;
        }
    </style>

    <script>
        const fileInput = document.getElementById('file');

        fileInput.addEventListener('change', () => {
            const file = fileInput.files[0];

            const formData = new FormData();

            formData.append('file', file);

            fetch('/upload', {
                    method: 'POST',
                    body: formData,
                })
                .then((response) => {
                    // Procesar la respuesta del controlador
                })
                .catch((error) => {
                    // Manejar el error
                });
        });

        function openFileExplorer() {
            const fileInput = document.getElementById('file-input');
            fileInput.click();

            fileInput.addEventListener('change', () => {
                const files = fileInput.files;
                const file = files[files.length - 1]; // Obtener el último archivo seleccionado
                const filename = file.name;
                const previewContainer = document.getElementById('preview-container');
                const previewFilename = document.getElementById('preview-filename');
                const previewImage = document.getElementById('preview-image');

                previewFilename.textContent = filename;
                previewContainer.classList.remove('hidden');

                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = new Image();
                    img.src = e.target.result;
                    img.onload = function() {
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');
                        const MAX_SIZE = 200;
                        let width = img.width;
                        let height = img.height;

                        if (width > height) {
                            if (width > MAX_SIZE) {
                                height *= MAX_SIZE / width;
                                width = MAX_SIZE;
                            }
                        } else {
                            if (height > MAX_SIZE) {
                                width *= MAX_SIZE / height;
                                height = MAX_SIZE;
                            }
                        }

                        canvas.width = width;
                        canvas.height = height;
                        ctx.drawImage(img, 0, 0, width, height);

                        previewImage.src = canvas.toDataURL('image/jpeg');
                    };
                };
                reader.readAsDataURL(file);
            });
        }
    </script>

    <script>
        function removeFile(containerId) {
            const fileInput = document.getElementById('file');
            fileInput.value = '';

            const container = document.getElementById(containerId);
            container.classList.add('hidden');

            if (containerId === 'dropped-file') {
                const previewImage = document.getElementById('preview');
                previewImage.src = '';

                const filenameElement = document.getElementById('filename');
                filenameElement.textContent = '';
            } else if (containerId === 'preview-container') {
                const previewImage = document.getElementById('preview-image');
                previewImage.src = '';

                const filenameElement = document.getElementById('preview-filename');
                filenameElement.textContent = '';
            }
        }
    </script>

    <script>
        const dropzone = document.getElementById('dropzone');
        const filenameElement = document.getElementById('filename');
        const droppedFile = document.getElementById('dropped-file');
        const previewImage = document.getElementById('preview');

        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('dragover');
        });

        dropzone.addEventListener('dragleave', (e) => {
            e.preventDefault();
            dropzone.classList.remove('dragover');
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('dragover');
            const fileInput = document.getElementById('file');
            fileInput.files = e.dataTransfer.files;

            if (fileInput.files.length > 0) {
                const files = fileInput.files;
                const file = files[files.length - 1]; // Obtener el último archivo seleccionado
                const filename = file.name;
                filenameElement.textContent = filename;
                droppedFile.classList.remove('hidden');

                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = new Image();
                    img.src = e.target.result;
                    img.onload = function() {
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');
                        const MAX_SIZE = 200;
                        let width = img.width;
                        let height = img.height;

                        if (width > height) {
                            if (width > MAX_SIZE) {
                                height *= MAX_SIZE / width;
                                width = MAX_SIZE;
                            }
                        } else {
                            if (height > MAX_SIZE) {
                                width *= MAX_SIZE / height;
                                height = MAX_SIZE;
                            }
                        }

                        canvas.width = width;
                        canvas.height = height;
                        ctx.drawImage(img, 0, 0, width, height);

                        previewImage.src = canvas.toDataURL('image/jpeg');
                    };
                };
                reader.readAsDataURL(file);
            }
        });
    </script> --}}
</x-app-layout>
