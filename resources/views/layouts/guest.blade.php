<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Favicon --}}
        <link rel="icon" href="https://res.cloudinary.com/dbltc2gr7/image/upload/v1694464911/images_guiamath/favicon-16x16_mvqhrl.png" type="image/x-icon">
    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            @livewire('navigation')

            {{ $slot }}
        </div>
    </body>
</html>
