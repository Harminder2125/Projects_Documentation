<x-app-layout>
    <x-slot name="title">Administrative Privileges</x-slot>
    <x-slot name="subtitle">Administration based privileges</x-slot>
    <div class="mb-2">@livewire('privileges.administrative.admin',["role_id"=>2])</div>


    <div class="mb-2">@livewire('privileges.administrative.user',["role_id"=>3])</div>




</x-app-layout>
