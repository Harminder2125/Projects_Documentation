<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased">
    <div class="items-top z-2 relative flex min-h-screen justify-center bg-gray-100 py-4 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-white dark:text-gray-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-white  dark:text-gray-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="flex flex-col h-screen w-full items-center bg-zinc-100">
            <div class="z-1 flex h-14 w-full items-center justify-center bg-gradient-to-r from-fuchsia-900 via-pink-800 to-red-700 px-10">
                <div class="w-8/12 py-5">
                    <nav class=" px-2 py-0.5 opacity-90 dark:bg-gray-900 sm:px-4">
                        <div class="container mx-auto flex flex-wrap items-center justify-between">
                            <a href="https://flowbite.com/" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-6 w-6 text-white sm:h-9">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                                </svg>
                                <span class="self-center whitespace-nowrap text-lg font-semibold text-white">Project
                                    Manuals</span>
                            </a>
                            <button data-collapse-toggle="navbar-default" type="button" class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden" aria-controls="navbar-default" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                                <ul class="mt-4 flex flex-col p-4 dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-0 md:border-0">
                                    <li class="hover:bg-rose-700 block rounded py-2 pl-3 pr-4">

                                        <a href="/" class="{{ Route::is('home') ? 'md:text-rose-400' : '' }} text-sm text-white dark:text-white md:bg-transparent md:p-0 ">Introduction</a>
                                    </li>
                                    <li class="hover:bg-rose-700 block rounded py-2 pl-3 pr-3">

                                        <a href="/projects" class="{{ Route::is('projects') ? 'md:text-orange-400' : '' }} text-sm   text-white dark:text-white md:bg-transparent md:p-0 ">Home</a>

                                    </li>


                                    <li class="hover:bg-rose-700 block rounded py-2 pl-3 pr-4">

                                        <a href="/" class="{{ Route::is('home') ? 'md:text-orange-400' : '' }} text-sm  text-white dark:text-white md:bg-transparent md:p-0 ">Projects</a>

                                    </li>

                                    <li class="hover:bg-rose-700 block rounded py-2 pl-3 pr-4">

                                        <a href="/" class="{{ Route::is('home') ? 'md:text-orange-400' : '' }} text-sm  text-white dark:text-white md:bg-transparent md:p-0 ">Manuals</a>

                                    </li>

                                    <li class="hover:bg-rose-700 block rounded py-2 pl-3 pr-4">

                                        <a href="/" class="{{ Route::is('home') ? 'md:text-orange-400' : '' }} text-sm  text-white dark:text-white md:bg-transparent md:p-0 ">Contact Us</a>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="w-full h-80 bg-green-400">

                vv
            </div>
            <div class="container items-center w-8/12 bg-white h-1/2">

            </div>
            <div class="footer"></div>

        </div>
    </div>
    @livewireScripts
</body>

</html>
