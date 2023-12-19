@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center p-2 text-base font-medium text-white rounded-lg bg-indigo-400 dark:hover:bg-gray-700 group'
            : 'flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:hover:bg-gray-700 hover:text-white hover:bg-indigo-400';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
