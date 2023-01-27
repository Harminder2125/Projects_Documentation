@props(['disabled' => false])

<div class="border {{$disabled?'boder-gray-400 border-dashed':'border-fuchsia-900 opacity-30'}} mt-1">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-500 border-0 text-gray-500 focus:border-fuchsia-300 focus:ring focus:ring-fuchsia-200 focus:ring-opacity-50 rounded-sm shadow-sm']) !!}>

</div>
