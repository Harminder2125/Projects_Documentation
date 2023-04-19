<div>
    <script src="/assets/js/lottieplayer.js"></script>

    <div class="flex">
        <div class="flex flex-col bg-white  w-9/12 pr-4">

            <div class="pr-4 text-justify tracking-widest  text-gray-600 text-regular leading-relaxed">
                {{$project['description']}}
            </div>
            <div class="my-4 mt-8">
                <x-main-title>Current Project Team</x-main-title>
            </div>

            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">


                <div class="grid gap-x-2 grid-cols-4 gap-y-4">
                    @if($project_head != "")
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-2 w-20 h-20 rounded-full bg-fuchsia-900 text-sm font-semibold uppercase flex items-center justify-center text-white">
                            {{$this->getNameInitials($project_head->user->name)}}
                        </div>

                        <div class="text-xs mt-2 text-center uppercase font-semibold">
                            {{$project_head->user->name}}


                        </div>
                        <div class="text-xs text-gray-500">Project Head</div>
                    </div>
                    @endif
                    @if($team_leader!= "")

                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-2 w-20 h-20 rounded-full bg-rose-800 text-sm font-semibold uppercase flex items-center justify-center text-white">
                            {{$this->getNameInitials($team_leader->user->name)}}
                        </div>

                        <div class="text-xs mt-2 text-center uppercase font-semibold">
                            {{$team_leader->user->name}}


                        </div>
                        <div class="text-xs text-gray-500">Team Leader</div>
                    </div>
                    @endif

                    @foreach ($team_members as $member)


                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-2 w-20 h-20 rounded-full bg-gray-700 text-sm font-semibold uppercase flex items-center justify-center text-white">
                            {{$this->getNameInitials($member["team_member_name"])}}

                        </div>

                        <div class=" mt-2 text-center text-sm uppercase font-semibold">
                            {{$member["team_member_name"]}}


                        </div>
                        <div class="text-xs text-gray-500">Team Member</div>
                    </div>

                    @endforeach

                </div>
                @if($project_head=="" && $team_leader=="" && $team_members==[])
                <div class="w-full px-8 flex justify-center items-center">
                    <x-sub-title>No Team member assigned.</x-sub-title>
                </div>
                @endif

            </div>



        </div>
        <div class="w-3/12 py-4  rounded-lg border-2 border-dashed border-gray-200 shadow-sm">


            <div class="relative overflow-x-auto  sm:rounded-lg">
                <div class="mb-4  flex justify-center text-gray-900 ">
                    @if($project['logo_image'])
                    <img class="object-cover w-40 h-40 rounded" src='/storage/{{$project['logo_image']}}' />
                    @else
                    <div class="rounded w-40 h-40 text-2xl flex items-center justify-center bg-fuchsia-800 text-white">{{$project['abbreviation']}}</div>
                    @endif
                </div>
                <div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 uppercase px-6 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-white">
                            State / Group
                        </div>
                        <div class="px-6 flex uppercase text-xs  text-gray-500">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            {{$project->group->name}}
                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 uppercase px-6 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-white">
                            Project Head
                        </div>
                        <div class="px-6 flex uppercase text-xs  text-gray-500">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z"></path>
                            </svg>
                            @if($project_head)
                            {{$project_head->user->name}}
                            @else
                            Not assigned
                            @endif
                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 text-sm  uppercase px-6  font-medium text-gray-600 whitespace-nowrap dark:text-white">


                            Project Category
                        </div>
                        <div class="px-6 flex text-xs   uppercase text-gray-500">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>
                            @if($project->project_category)
                            {{$project->project_category->name}}
                            @else
                            Not set
                            @endif


                        </div>
                    </div>
                    <div class=" py-2  dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 text-sm uppercase px-6  font-medium text-gray-600 whitespace-nowrap dark:text-white">


                            Launch date
                        </div>
                        <div class="px-6 flex text-xs   uppercase text-gray-500">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            @if($project->launch_date)

                            {{$project->launch_date->format('d-M-Y')}}

                            @else
                            No information
                            @endif




                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 text-sm  uppercase px-6  font-medium text-gray-600 whitespace-nowrap dark:text-white">


                            Launched By
                        </div>
                        <div class="px-6 flex uppercase text-xs  text-gray-500">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            </svg>
                            @if($project->launched_by)
                            {{$project->launched_by}}
                            @else
                            No information
                            @endif

                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <div class=" flex justify-end ">

        <a href="/admin/projects">
            <x-dark-button class="my-4 text-sm p-2 rounded-lg shadow mr-2">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>




                back to projects</x-dark-button>
        </a>

        <x-primary-button class="my-4 text-sm p-2 rounded-lg shadow mr-2" wire:click="toggle('confirmingteamassign')">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
            </svg>





            Assign Team</x-primary-button>



        <a href="/project/timeline/{{$project->id}}">

            <x-secondary-button class="mr-2 my-4 text-sm p-2 rounded-lg shadow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                Project Timeline</x-secondary-button>
        </a>

        <x-danger-button wire:click="toggle('confirmingProjectTransfer')" class="my-4 text-sm p-2 rounded-lg shadow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>


            Delete Project </x-danger-button>


    </div>
    <div class="p-4">
        <x-main-title>Quick Links</x-main-title>
        <div class="w-full grid grid-cols-6 gap-3 mt-4 ">
            @foreach ($featurebox as $fb)
            <div class="border bg-stone-200 border-dashed p-4 rounded-md shadow-sm hover:bg-stone-300 cursor-pointer">
                <div class="flex flex-col justify-center items-center">
                    <div class="flex">
                        <object type="image/svg+xml" data="\assets\svg\{{ $fb->icon }}.svg" width="32" height="32"> </object>
                    </div>
                    <div class="ml-2 ">
                        <x-main-title class="text-gray-800 text-sm text-center">{{ $fb->title }}</x-main-title>
                        {{-- <x-sub-title class="h-10 text-xs text-center">{{ $fb->subtitle }}</x-sub-title> --}}

                    </div>
                </div>

                {{-- <div class="py-4 flex flex-col justify-center items-center ">

                @if(false) <div>
                    <lottie-player src="/assets/js/lottieanimations/box-empty.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                    <x-sub-title class="font-semibold text-gray-400">Onboarding document not available!</x-sub-title>
                </div>
                @else

                <div class="flex flex-col justify-center items-center">

                    <h2 class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password requirements:</h2>
                    <ul class="max-w-md space-y-1 text-sm text-gray-500 list-inside text-center dark:text-gray-400">
                        @foreach ($fb->featureboxentries as $val)
                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>{{ $val->description}}</li>
                @endforeach




                </ul>




            </div>
            @endif


        </div> --}}




    </div>
    @endforeach
</div>
</div>
<div class="mt-4 p-4">
    <x-main-title>Project Manuals</x-main-title>
    <div class="flex justify-end items-center">
        <a href="javascript:void(0);" wire:click="toggle('confirmingaddmanual')" class="pointer bg-stone-200 p-2 rounded-md hover:bg-stone-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
            </svg>


        </a>

    </div>
    <div class="py-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

            <thead class="text-xs text-gray-700 uppercase bg-stone-200 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">

                        Title
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" /></svg></a>



                    </div>

                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Version
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Staging URL
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Major Changes
                    </div>
                </th>


                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Action
                    </div>
                </th>




            </thead>
            <tbody>

                @foreach($manuals as $man)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <td class="px-6 py-4">{{$man->title}}</td>

                    <td class="px-6 py-4">{{$man->version}}</td>


                    <td class="px-6 py-4">{{$man->staging_server_url}}</td>
                    <td class="px-6 py-4">{{$man->major_changes}}</td>


                    <td class="px-6 py-4 flex">
                        <a href="javascript:void(0);" wire:click="toggle('editmode')" class="pointer mr-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-sky-800 hover:stroke-sky-600 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </a>
                        |
                        <a href="javascript:void(0);" wire:click="deleteManual({{$man->id}})" class="pointer ml-1 "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" class="w-5 h-5 stroke-red-800 hover:stroke-red-600 ">
                                <path stroke-linecap=" round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>


                        </a>


                    </td>



                </tr>
                @endforeach

                @if($manuals->count() ==0)
                <td colspan="6">
                    <div class="flex w-full justify-center items-center py-5">
                        <p class="text-gray-400">No manual exists for this project ...</p>
                    </div>
                </td>

                @endif

            </tbody>
        </table>

    </div>
</div>

<x-jet-confirmation-modal wire:model="confirmingteamassign">


    <x-slot name="icon">
        <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>


        </div>
    </x-slot>

    <x-slot name="title">
        <span class="text-red-800">Assign Team to this project</span>
    </x-slot>
    <x-slot name="subtitle">
        Assign Project Head, Team Leader and Team Members.
    </x-slot>
    <x-slot name="content">

        <div class="w-full flex mt-2 justify-center items-center py-4 border border-gray-500 border-dashed rounded-lg">


            <div class="p-4 w-1/5 border-r border-dashed border-gray-500">
                <x-main-title>Project Head</x-main-title>

            </div>
            <div class="p-4 w-3/5 border-r border-dashed border-gray-500">
                @if($temp['project_head_id'] =="")
                <div class="w-full flex justify-center items-center">
                    <x-sub-title>No Project head assigned!</x-sub-title>
                </div>

                @else
                <div class="flex w-full px-4">
                    <div class="mx-2 w-12 h-12 rounded-full bg-fuchsia-900 text-sm font-semibold uppercase flex items-center justify-center text-white">
                        {{$this->getNameInitials($temp['project_head_name'])}}
                    </div>
                    <div>
                        <div class="text-xs mt-2  uppercase font-semibold">
                            {{$temp['project_head_name']}}

                        </div>
                        <div class="text-xs text-gray-500">Project Head</div>
                    </div>

                </div>


                @endif


            </div>

            <div class="p-4 w-1/5  rounded-lg">
                @if($temp['project_head_id'] =="")

                <a href="javascript:void(0)" wire:click="toggle('projectheadmodal')" class="text-blue-600"> Add</a>

                @else
                <a href="javascript:void(0)" wire:click="toggle('projectheadmodal')" class="text-blue-600">Update</a>


                {{-- <x-dark-button> Update</x-dark-button> --}}
                @endif

            </div>




        </div>
        <div class="w-full flex mt-2 justify-center items-center py-4 border border-gray-500 border-dashed rounded-lg">


            <div class="p-4 w-1/5 border-r border-dashed border-gray-500">
                <x-main-title>Team Leader</x-main-title>

            </div>
            <div class="p-4 w-3/5 border-r border-dashed border-gray-500">
                @if($temp['team_leader_id'] =="")
                <div class="w-full flex justify-center items-center">
                    <x-sub-title>No Team team leader assigned!</x-sub-title>
                </div>

                @else
                <div class="flex w-full px-4">
                    <div class="mx-2 w-12 h-12 rounded-full bg-red-800 text-sm font-semibold uppercase flex items-center justify-center text-white">
                        {{$this->getNameInitials($temp['team_leader_name'])}}
                    </div>
                    <div>
                        <div class="text-xs mt-2  uppercase font-semibold">
                            {{$temp['team_leader_name']}}

                        </div>
                        <div class="text-xs text-gray-500">Team Leader</div>
                    </div>

                </div>

                @endif


            </div>

            <div class="p-4 w-1/5  rounded-lg">
                @if($temp['team_leader_id'] =="")

                <a href="javascript:void(0)" wire:click="toggle('teamleadermodal')" class="text-blue-600"> Add</a>


                @else
                <a href="javascript:void(0)" wire:click="toggle('teamleadermodal')" class="text-blue-600">Update</a>


                @endif

            </div>




        </div>

        <div class="w-full flex mt-2 justify-center items-center py-4 border border-gray-500 border-dashed rounded-lg">


            <div class="p-4 w-1/5 border-r border-dashed border-gray-500">
                <x-main-title>Team Members</x-main-title>

            </div>
            <div class="p-4 w-3/5 border-r border-dashed border-gray-500">
                @if($temp['members'] ==[])
                <div class="w-full flex justify-center items-center">
                    <x-sub-title>No Team members assigned!</x-sub-title>
                </div>

                @else
                <div class="grid grid-cols-1 gap-2">

                    @foreach($temp['members'] as $key => $tmember)

                    <div class="flex w-full px-4">
                        <div class="mx-2 w-12 h-12 rounded-full bg-gray-800 text-sm font-semibold uppercase flex items-center justify-center text-white">

                            {{$this->getNameInitials($tmember['team_member_name'])}}
                        </div>
                        <div>
                            <div class="text-xs mt-2  uppercase font-semibold">
                                {{$tmember['team_member_name']}} (<a class="text-blue-600" wire:click="removeTeamMember({{$key}})" href="javascript:void(0)">remove</a>)



                            </div>
                            <div class="text-xs text-gray-500">Team Member</div>
                        </div>

                    </div>


                    @endforeach
                </div>
                @endif
            </div>

            <div class="p-4 w-1/5  rounded-lg">


                <a href="javascript:void(0)" wire:click="toggle('teammembermodal')" class="text-blue-600"> Add</a>



            </div>




        </div>


    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingteamassign')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        @if(true)
        <x-jet-danger-button class="ml-2" wire:click="toggle('assignteamfinal')" wire:loading.attr="disabled">
            Finalize
        </x-jet-danger-button>
        @endif
    </x-slot>
</x-jet-confirmation-modal>

<x-jet-confirmation-modal wire:model="assignteamfinal">


    <x-slot name="icon">
        <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>


        </div>
    </x-slot>

    <x-slot name="title">
        <span class="text-red-800">Finalize Project Team</span>
    </x-slot>
    <x-slot name="subtitle">
        Finalize project head, team leader and team members
    </x-slot>
    <x-slot name="content">

        <div class="w-full flex flex-col justify-center items-center py-4">

            <div class="p-4 w-full border border-gray-500 border-dashed rounded-lg">

                <x-main-title>
                    <div class="text-center leading-loose">Are you sure you want to Finalize this team to <span class="text-rose-800">{{$project['title']}}</span> Project<span class="text-orange-600"></span> </div>
                </x-main-title>

                <div class="flex flex-col mt-2">
                    <div class="w-full flex bg-gray-200 mb-1 rounded-md">
                        <div class="bg-gray-300 w-1/3 p-4 rounded-l-md">Project Head</div>



                        <div class="p-4">{{$temp['project_head_name']}}</div>

                    </div>
                    <div class="w-full flex bg-gray-200 mb-1  rounded-md">

                        <div class="bg-gray-300 w-1/3 p-4 rounded-l-md">Team Leader</div>



                        <div class="p-4">{{$temp['team_leader_name']}}</div>

                    </div>
                    <div class="w-full flex bg-gray-200 mb-1  rounded-md">

                        <div class="bg-gray-300 w-1/3 p-4 rounded-l-md">Team Members</div>


                        <div class="p-4">
                            @foreach($temp['members'] as $member)
                            <div class="py-2 ">{{$member['team_member_name']}}</div>

                            @endforeach
                        </div>

                    </div>


                </div>

            </div>




        </div>





    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="toggle('assignteamfinal')" wire:loading.attr="disabled">

            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="finalizeTeam()" wire:loading.attr="disabled">
            Yes! Finalize it
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>

<x-jet-confirmation-modal wire:model="projectheadmodal">


    <x-slot name="icon">
        <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>


        </div>
    </x-slot>

    <x-slot name="title">
        <span class="text-red-800">Add Project Head</span>
    </x-slot>
    <x-slot name="subtitle">
        Assign project head to current project
    </x-slot>
    <x-slot name="content">

        <div class="w-full flex flex-col justify-center items-center py-4">

            <div class="p-4 w-full border-0 border-gray-500 border-dashed rounded-lg">
                <x-jet-label for="cap" value="{{ __('Select Project Head') }}" />

                <x-select type="text" class="mt-1 block w-full" wire:model="temp.project_head_id" :userlist="$users" />
            </div>



        </div>





    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('projectheadmodal')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="selectProjectHead()" wire:loading.attr="disabled">
            Select !
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>

<x-jet-confirmation-modal wire:model="teamleadermodal">


    <x-slot name="icon">
        <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>


        </div>
    </x-slot>

    <x-slot name="title">
        <span class="text-red-800">Add Project Head</span>
    </x-slot>
    <x-slot name="subtitle">
        Assign project head to current project
    </x-slot>
    <x-slot name="content">

        <div class="w-full flex flex-col justify-center items-center py-4">

            <div class="p-4 w-full border-0 border-gray-500 border-dashed rounded-lg">
                <x-jet-label for="cap" value="{{ __('Select Project Head') }}" />

                <x-select type="text" class="mt-1 block w-full" wire:model="temp.team_leader_id" :userlist="$users" />
            </div>



        </div>





    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('teamleadermodal')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="selectTeamLeader()" wire:loading.attr="disabled">
            Select !
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>

<x-jet-confirmation-modal wire:model="teammembermodal">


    <x-slot name="icon">
        <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>


        </div>
    </x-slot>

    <x-slot name="title">
        <span class="text-red-800">Add Team Member</span>
    </x-slot>
    <x-slot name="subtitle">
        Assign Team Member to current project
    </x-slot>
    <x-slot name="content">

        <div class="w-full flex flex-col justify-center items-center py-4">

            <div class="p-4 w-full border-0 border-gray-500 border-dashed rounded-lg">
                <x-jet-label for="cap" value="{{ __('Select Team Member') }}" />

                <x-select type="text" class="mt-1 block w-full" wire:model="temp.team_member_id" :userlist="$users" />
            </div>



        </div>





    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('teammembermodal')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="selectTeamMember()" wire:loading.attr="disabled">
            Select !
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>

<x-jet-confirmation-modal wire:model="confirmingaddmanual">


    <x-slot name="icon">
        <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>


        </div>
    </x-slot>

    <x-slot name="title">
        <span class="text-red-800">Create a new manual</span>
    </x-slot>
    <x-slot name="subtitle">
        Create a new manual or a new version of existing manual
    </x-slot>
    <x-slot name="content">
        <div class="w-full flex flex-col mt-2  py-4">
            <div class="py-2">
                <x-jet-label for="cap" value="{{ __('Title') }}" />
                <x-input placeholder="Title for the manual" required wire:model="manual.title" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
            <div class="py-2">

                <x-jet-label for="cap" value="{{ __('Version') }}" />
                <x-input placeholder="1.0.0" required wire:model="manual.version" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
            <div class="py-2">

                <x-jet-label for="cap" value="{{ __('Staging URL') }}" />
                <x-input placeholder="https://example.com" required wire:model="manual.staging_server_url" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
            <div class="py-2">

                <x-jet-label for="cap" value="{{ __('Major Changes') }}" />
                <x-input placeholder="New Features added" required wire:model="manual.major_changes" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>




        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingaddmanual')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>


        <x-jet-danger-button class="ml-2" wire:click="addManual()" wire:loading.attr="disabled">
            Create
        </x-jet-danger-button>

    </x-slot>
</x-jet-confirmation-modal>

<x-jet-confirmation-modal wire:model="confirmingManualDeletion">

    <x-slot name="icon">
        <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>


        </div>
    </x-slot>

    <x-slot name="title">
        <span class="text-red-800">Delete Manual?</span>
    </x-slot>
    <x-slot name="subtitle">
        This will permanently remove this manual and all the related details.
    </x-slot>
    <x-slot name="content">

        <div class="w-full flex justify-center items-center p-10">

            <div class="p-4 border border-gray-500 border-dashed rounded-lg">
                <h1><span class="text-lg uppercase text-gray-600 font-semibold">Are you sure you want to delete manual?</span><br />Title - {{$manual['title']}}<br />Version - {{$manual['version']}}<br />Staging URL- {{$manual['staging_server_url']}}<br /> </h1>
            </div>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingManualDeletion')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="deleteMan({{$manual['id']}})" wire:loading.attr="disabled">
            delete it !
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>



</div>
