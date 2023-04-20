<x-app-layout>
    <x-slot name="title">
    </x-slot>
    <x-slot name="subtitle">
    </x-slot>
    <div class="flex flex-col items-center justify-center">
        <h2>Project Manual (Version 1.0.0.)</h2>
        <h1 class="text-gray-900 text-3xl uppercase font-inter mb-8">Vehicle Management System</h1>

    </div>
    <div>

    </div>
    @livewire('manual-component',['id'=>$id])
</x-app-layout>
