<x-app-layout>
 
           

    <x-slot name="title">
        {{$project_name}}
    </x-slot>
    <x-slot name="subtitle">
        {{$abbreviation}}
    </x-slot>
    <div class="rounded w-full mx-auto mt-4">
        @livewire('project-detail-component',["id"=>$project_id])
    </div>
    <x-timeline ></x-timeline>

</x-app-layout>
