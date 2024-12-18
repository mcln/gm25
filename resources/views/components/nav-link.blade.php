@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-blue-600 dark:border-indigo-600 text-sm font-medium leading-5 text-white dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white dark:text-gray-400 hover:text-blue-500 dark:hover:text-gray-300 hover:border-transparent dark:hover:border-gray-700 focus:outline-none focus:text-blue-200 dark:focus:text-gray-300 focus:border-blue-200 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
