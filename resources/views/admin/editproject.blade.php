<x-app-layout>


    <x-slot name="title">
        Edit Project Details
    </x-slot>
    <x-slot name="subtitle">
        You are changing the basic details of this project
    </x-slot>
    @livewire('edit-project',["id"=>$projectid])

</x-app-layout>
