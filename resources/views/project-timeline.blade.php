<x-app-layout>



    <x-slot name="title">
        {{$project_name}}
    </x-slot>
    <x-slot name="subtitle">
        Project Manual Timeline
    </x-slot>
    <div class="rounded w-full mx-auto mt-4  p-6">
        <x-timeline :id="$project_id" />
    </div>


</x-app-layout>
