@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 hover:border-b border-pink-300  bg-pink-200 text-sm font-medium leading-5 text-pink-800 focus:outline-none focus:border-fuchsia-600 transition py-3'
            : 'inline-flex items-center px-3 border-b border-gray-200 mt-1 text-sm font-medium leading-5 text-gray-800 hover:text-gray-800 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:border-gray-300 transition py-3 hover:bg-gray-100';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
