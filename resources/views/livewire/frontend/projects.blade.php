<div class="flex flex-col bg-stone-100 w-full items-center shadow-2xl">
    {{-- <div class="h-60 bg-gradient-to-r to-fuchsia-900/20 from-red-800/20 via-pink-800/20 w-full flex justify-center items-center">

      
    </div> --}}
    <div class="w-8/12 bg-white min-h-screen ">
        <div class="h-40  w-full flex flex-col justify-center items-center">
            <x-main-heading class="!text-2xl !text-stone-700">Projects</x-main-heading>
            <x-sub-heading class="!mb-4">Portfolio of projects developed by National Informatics Centre</x-sub-heading>

            <div class="flex justify-start px-8 w-full">
                <span class="flex mb-2 ">
                    <a href="/" class="">
                        <x-sub-heading class="hover:!text-fuchsia-800"> Home > </x-sub-heading>

                    </a>
                    <a href="/" class="">
                        <x-sub-heading class="hover:!text-fuchsia-800">&nbsp;Projects</x-sub-heading>


                    </a>
                </span>

            </div>





        </div>

        <div class="px-8">
            <div class="bg-stone-200 p-4 grid grid-cols-4 mb-4">
                <div class="flex justify-center items-center">
                    <h2 class="font-semibold">Filter Projects</h2>
                </div>

                <div class="flex justify-center items-center">
                    <x-jet-label class="mr-2">Group/State</x-jet-label>
                    <x-select type="text" class="mt-1 block w-full" wire:model="project.category" :userlist="$groups" />

                </div>

                <div class="flex justify-center items-center">
                    <x-jet-label class="mx-2">Category</x-jet-label>

                    <x-select type="text" class="mt-1 block w-full" wire:model="project.category" :userlist="$categories" />
                </div>

                <div class="flex justify-center items-center">
                    <x-primary-button class="mt-1">Filter Projects</x-primary-button>
                </div>




            </div>

            <h1 class="font-semibold">Total published projects ({{$projectscount}})</h1>
        </div>


        <div class="grid grid-cols-3 gap-x-4 gap-y-8 p-8">

            @foreach($projects as $project)
            <div class="border border-dashed border-gray-300 p-2 rounded-lg">
                @if($project->banner_image)
                @else
                <div class="bg-fuchsia-900/30 text-white rounded-t-lg h-40 flex justify-center items-center">{{$project->abbreviation}}</div>
                @endif
                <h1 class="uppercase font-semibold !text-lg my-2">{{$project->title}} ( {{$project->abbreviation}} )</h1>
                <x-sub-title class="!leading-loose">Developed by - <span class="text-fuchsia-900 bg-fuchsia-900/20 p-1 rounded-lg">{{$project->group->name}}</span>
                 under <span class="text-red-700">
                 {{$project->project_category->name}} 
                 </span> category</x-sub-title>



            </div>

            @endforeach
        </div>
        @if($projects->hasMorePages())
        <div class="p-8 bg-fuchsia-900/10">{{$projects->links()}}</div>
        @endif
    </div>


</div>
