<x-app-layout>



    <x-slot name="title">
        {{$project_name}}
    </x-slot>
    <x-slot name="subtitle">
        {{$abbreviation}}
    </x-slot>

    @livewire('create-project')


</x-app-layout>
