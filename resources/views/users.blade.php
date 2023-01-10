<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-10">

                <h1 class="text-lg text-pink-800 font-semibold mb-3"> All Users</h1>

                @livewire('users')
            </div>
        </div>

    </div>
</x-app-layout>
