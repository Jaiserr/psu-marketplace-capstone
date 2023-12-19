@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center p-2 w-full text-base font-medium text-white rounded-lg hover:bg-blue-600 bg-blue-600 dark:hover:bg-gray-700'
            : 'flex items-center p-2 text-base font-medium text-white rounded-lg dark:hover:bg-gray-700 hover:bg-blue-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>