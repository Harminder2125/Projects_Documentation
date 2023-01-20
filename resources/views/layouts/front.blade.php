<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layouts.partials._header')
</head>
<body>
    @include('layouts.partials._nav')

    <div class="font-sans text-gray-700 antialiased">
        {{ $slot }}
    </div>

   @include('layouts.partials._footer')
    @livewireScripts
</body>
</html>
