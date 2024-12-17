<div class="flex flex-row min-h-screen">
    <!-- Menú principal a la izquierda -->
    <div class="w-1/6 p-6 bg-gray-100 border-r">
        <h2 class="text-lg font-bold mb-4">Menú principal</h2>

        <!-- Selecciona un país -->
        <div class="mb-4">
            <label for="country" class="block text-left font-bold mb-2">Selecciona un país:</label>
            <select id="country" wire:model.live="selectedCountry" class="w-full border rounded p-2 text-sm">
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Selecciona una universidad -->
        <div class="mb-4">
            <label for="university" class="block text-left font-bold mb-2">Selecciona una universidad:</label>
            <select id="university" wire:model.live="selectedUniversity" class="w-full border rounded p-2 text-sm">
                <option value="">Selecciona una universidad</option>
                @foreach ($universities as $university)
                    <option value="{{ $university->id }}">{{ $university->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Selecciona un ramo -->
        @if ($selectedUniversity)
            <div class="mb-4">
                <label for="subject" class="block text-left font-bold mb-2">Selecciona un ramo:</label>
                <select id="subject" wire:model.live="selectedSubject" class="w-full border rounded p-2 text-sm">
                    <option value="">Selecciona un ramo</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
    </div>

    <!-- Sección de listados a la derecha -->
    @if ($selectedSubject)
        <div class="w-5/6 p-6 flex flex-col">
            <div class="flex-grow flex space-x-4">
                <!-- Listados de Certámenes -->
                <div class="flex-1">
                    <h3 class="font-bold text-xl text-center mb-4">Certámenes</h3>
                    @php
                        $certamenes = collect($listData)->filter(function ($item) {
                            return $item['type'] === 'Certamen';
                        });
                        $certamenIndex = 1;  // Inicializar índice manualmente
                    @endphp
                    @if ($certamenes->isNotEmpty())
                        <table class="w-full text-sm">
                            <tbody>
                                @foreach ($certamenes as $certamen)
                                    <tr>
                                        <!-- Fila con dos celdas: número y nombre -->
                                        <td class="text-right pr-4 w-12">{{ $certamenIndex++ }}</td> <!-- Alineado a la derecha -->
                                        <td class="text-left pl-4 w-auto">
                                            <a href="{{ $certamen['route'] }}" class="text-blue-500 hover:underline">
                                                {{ $certamen['name'] }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-gray-500 text-sm text-center">No hay certámenes disponibles.</p>
                    @endif
                </div>

                <!-- Listados de Guías -->
                <div class="flex-1">
                    <h3 class="font-bold text-xl text-center mb-4">Guías</h3>
                    @php
                        $guias = collect($listData)->filter(function ($item) {
                            return $item['type'] === 'Guía';
                        });
                        $guiaIndex = 1;  // Reiniciar índice para guías
                    @endphp
                    @if ($guias->isNotEmpty())
                        <table class="w-full text-sm">
                            <tbody>
                                @foreach ($guias as $guia)
                                    <tr>
                                        <!-- Fila con dos celdas: número y nombre -->
                                        <td class="text-right pr-4 w-12">{{ $guiaIndex++ }}</td> <!-- Alineado a la derecha -->
                                        <td class="text-left pl-4 w-auto">
                                            <a href="{{ $guia['route'] }}" class="text-blue-500 hover:underline">
                                                {{ $guia['name'] }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-gray-500 text-sm text-center">No hay guías disponibles.</p>
                    @endif
                </div>

                <!-- Listados de Controles -->
                <div class="flex-1">
                    <h3 class="font-bold text-xl text-center mb-4">Controles</h3>
                    @php
                        $controles = collect($listData)->filter(function ($item) {
                            return $item['type'] === 'Control';
                        });
                        $controlIndex = 1;  // Reiniciar índice para controles
                    @endphp
                    @if ($controles->isNotEmpty())
                        <table class="w-full text-sm">
                            <tbody>
                                @foreach ($controles as $control)
                                    <tr>
                                        <!-- Fila con dos celdas: número y nombre -->
                                        <td class="text-right pr-4 w-12">{{ $controlIndex++ }}</td> <!-- Alineado a la derecha -->
                                        <td class="text-left pl-4 w-auto">
                                            <a href="{{ $control['route'] }}" class="text-blue-500 hover:underline">
                                                {{ $control['name'] }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-gray-500 text-sm text-center">No hay controles disponibles.</p>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>















