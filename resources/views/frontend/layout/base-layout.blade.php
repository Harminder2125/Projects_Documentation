<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.frontend._header />
</head>
<body>
    <x-partials.frontend._nav />

    <div class="font-sans text-gray-700 antialiased">
        {{ $slot }}
    </div>

    <x-partials.frontend._footer />
    @livewireScripts
</body>
</html>
