@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex w-full items-center px-3 hover:border-b border-fuchsia-300 bg-fuchsia-900 font-normal text-fuchsia-50 focus:outline-none focus:border-fuchsia-600 transition py-3'
: 'inline-flex w-full items-center px-3 border-gray-200 mt-1 font-semibold text-gray-500 text-xs  hover:text-gray-500 hover:border-gray-300 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition py-3 hover:bg-gray-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
