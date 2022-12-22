<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-frontend.partials._header />
</head>
<body>
    <x-frontend.partials._nav />
   
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    <x-frontend.partials._footer />
    @livewireScripts
</body>
</html>
