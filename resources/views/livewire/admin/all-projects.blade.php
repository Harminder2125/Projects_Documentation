<div>
    <div class="w-full bg-gray-200 rounded-md p-8 flex justify-between items-center mb-4">

        <div class="w-2/5 px-4">
            <x-input type="text" wire:model.defer="search" placeholder="Search Project..." class="w-full border-0 h-12 rounded-lg">

            </x-input>
        </div>
        <div class="w-1/5 px-4">

            <x-select wire:model.defer="category" :userlist="$categorylist">


            </x-select>
        </div>
        <div class="w-1/5 px-4">

            <x-select wire:model.defer="status" :userlist="$statuslist">


            </x-select>
        </div>



        <div class="w-1/5 flex ">
            <x-primary-button class="w-full mr-2 " wire:click="searchProjects()">Search</x-primary-button>

            <x-dark-button class="w-full" wire:click="resetSearchForm()">Reset</x-dark-button>
        </div>



    </div>
    @if($this->search || $this->category !=0 || $this->status !=0)
    <div class="my-2 py-2 flex justify-center items-center bg-orange-100">
        <x-sub-title>Search projects where

            @if($this->search)
            <span>title contains the word <span class="text-rose-700">{{$this->search}}</span>,</span>


            @endif
            @if($this->category !=0 )
            <span>Category is <span class="text-rose-700">{{$this->categoryname}}</span>,</span>


            @endif
            @if($this->status!=0)
            <span>publish status is <span class="text-rose-700">{{$this->statusname}}</span>,</span>


            @endif


        </x-sub-title>
    </div>
    @endif

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-purple-100 dark:bg-gray-700 dark:text-gray-400">
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">

                    Project Name
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                            <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" /></svg></a>



                </div>

            </th>
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Abbreviation </div>
            </th>

            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Category
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Project Head
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Publish Status
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                            <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" /></svg></a>
                </div>
            </th>

            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Action
                </div>
            </th>




        </thead>
        <tbody>

            @foreach($allprojects as $project)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                <td class="px-6 py-4">{{$project['title']}}</td>

                <td class="px-6 py-4">{{$project['abbreviation']}}</td>


                <td class="px-6 py-4">
                    @if($project->category!=null)
                    {{$project->project_category->name}}

                    @endif
                </td>


                @if($project->head->first())

                <td class="px-6 py-4">{{$project->head->first()->user->name}}</td>
                @else
                <td class="px-6 py-4 text-red-700">Not Assigned</td>

                @endif

                <td class="font-semibold px-6 py-4 uppercase {{$project->status->name=='Published'? 'text-green-700': 'text-red-700'}}">{{$project->status->name}}</td>

                <td class="px-6 py-4 flex">

                    <x-secondary-button wire:click="openProjectDetails({{$project['id']}})" class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>




                    </x-secondary-button>

                    <x-dark-button wire:click="openProjectForEditing({{$project['id']}})" class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>


                    </x-dark-button>
                </td>



            </tr>
            @endforeach

            @if($allprojects->count() ==0)
            <td colspan="6">
                <div class="flex w-full justify-center items-center py-5">
                    <p class="text-gray-400">No record found...</p>
                </div>
            </td>

            @endif

        </tbody>
    </table>
    <div class="py-3" wire:key="$allusers->id">

        {{$allprojects->links()}}
    </div>

</div>
