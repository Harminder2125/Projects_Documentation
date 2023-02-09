<x-app-layout>


    <x-slot name="title">
        Manage Projects
    </x-slot>
    <x-slot name="subtitle">
        Complete list of projects of your group
    </x-slot>
    <div>
        <div class="bg-gray-100 p-8 flex justify-end rounded-md">
            <a href="/project/create">
                <x-primary-button> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg> Create New Project</x-primary-button>
            </a>


        </div>
        <div class="flex flex-wrap gap-x-4 gap-y-8 py-8">
            @foreach($projects as $project)
            <div class="p-4 rounded-md bg-gray-100">
                <x-main-title>{{$project->title}}({{$project->abbreviation}})</x-main-title>
                <div class="flex py-8 flex-wrap">
                    <div class=" bg-gray-50 border mr-2 border-gray-200 px-2 rounded-md py-2">Manuals - 0</div>
                    <div class="bg-gray-50 border mr-2 border-gray-200 rounded-md px-2 py-2">Team members - 0</div>


                </div>
                <x-dark-button>Update Team</x-dark-button>
                <x-danger-button>Create Manual</x-danger-button>



            </div>
            @endforeach
        </div>
    </div>




</x-app-layout>
