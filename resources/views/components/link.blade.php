@props(['actives'])

@php
$classes = ($actives ?? false)
            ? 'flex items-center p-2 pl-11 w-full text-base font-medium text-white rounded-lg hover:bg-indigo-600 bg-indigo-400 dark:hover:bg-gray-700'
            : 'flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:hover:bg-gray-700 hover:bg-indigo-400';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>