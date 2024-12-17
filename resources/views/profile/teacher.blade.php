<x-AppLayout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-2">Profesor: {{ $teacher->name }}</h1>

        <x-card>
            <div class="flex">
                <div>
                    @if ($teacher->avatar)
                        <x-avatar squared size="w-36 h-36" src="{{ $teacher->avatar }}" />
                    @else
                        <x-avatar squared size="w-36 h-36" src="{{ asset('storage/' . $teacher->profile_photo_path) }}" />
                    @endif
                </div>

                <div class="ml-8">
                    <p><b>Valoración:</b> 5 Stars (20 Opiniones)</p>
                    <p><b>Username:</b> {{ $teacher->username }}</p>
                    <p><b>Nacionalidad:</b> {{ $teacher->nationality }}</p>
                    <p><b>Título:</b> {{ $teacher->degree_name }}</p>
                    <p><b>Universidad:</b> {{ $teacher->university_name }}</p>
                </div>
            </div>
        </x-card>

        <div class="mb-2"></div>
        <x-card title="Experiencia">
            <x-icon name="badge-check" class="w-5 h-5" />
            {{ $user_details->experience ?? '' }}
        </x-card>

        <div class="mb-2"></div>
        <x-card title="Especialidad(es)">
            <x-icon name="star" class="w-5 h-5" />
            {{ $user_details->specialty ?? '' }}
        </x-card>

        <div class="mb-2"></div>
        <x-card title="Maestria(s) o Diplomado(s)">
            <x-icon name="library" class="w-5 h-5" />
            {{ $user_details->masters_diplomas ?? '' }}
        </x-card>

        <div class="mb-2"></div>
        <x-card title="mas acerca de mí">
            <x-icon name="identification" class="w-5 h-5" />
            {{ $user_details->about ?? '' }}
        </x-card>

        <div class="mb-2"></div>
        <x-card title="Opiniones">
            <x-icon name="annotation" class="w-5 h-5" />
            Opinion 1<br>
            Opinion 2<br>
            Opinion 3<br>
        </x-card>

    </div>
</x-AppLayout>
