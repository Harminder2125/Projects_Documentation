<x-app-layout>
    <x-slot name="title">
        Project Manual
    </x-slot>
    <x-slot name="subtitle">
        All Project Manuals
    </x-slot>

    @livewire('manual-component',['id'=>$id])
</x-app-layout>
