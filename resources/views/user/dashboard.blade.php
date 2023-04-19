<x-app-layout>


    <x-slot name="title">
        My Dashboard
    </x-slot>
    <x-slot name="subtitle">
        Complete list of projects as per roles in your group
    </x-slot>
    

   @livewire('project-as-per-role',["id"=>$id])








</x-app-layout>
