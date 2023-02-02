<div>
    <div class="flex">
        <div class="flex flex-col bg-white  w-9/12 pr-4">

            <div class="pr-4 text-justify tracking-widest  text-gray-600 text-regular leading-relaxed">
                {{$project['description']}}
            </div>
            <div class="my-4 mt-8">
                <x-main-title>Project Team</x-main-title>
            </div>

            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">


                <div class="grid gap-x-2 grid-cols-4 gap-y-4">
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-2 w-20 h-20 rounded-full bg-fuchsia-900 text-sm font-semibold uppercase flex items-center justify-center text-white">
                            {{$this->getNameInitials($project->division->hod->name)}}
                        </div>

                        <div class="text-xs mt-2 text-center uppercase font-semibold">
                            {{$project->division->hod->name}}

                        </div>
                        <div class="text-xs text-gray-500">Project Head</div>
                    </div>
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-2 w-20 h-20 rounded-full bg-rose-800 text-sm font-semibold uppercase flex items-center justify-center text-white">
                            {{$this->getNameInitials($team_leader)}}
                        </div>

                        <div class="text-xs mt-2 text-center uppercase font-semibold">
                            {{$team_leader}}

                        </div>
                        <div class="text-xs text-gray-500">Team Leader</div>
                    </div>


                    @foreach ($team_members as $member)
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-2 w-20 h-20 rounded-full bg-gray-700 text-sm font-semibold uppercase flex items-center justify-center text-white">
                            {{$this->getNameInitials($member)}}
                        </div>

                        <div class=" mt-2 text-center text-sm uppercase font-semibold">
                            {{$member}}

                        </div>
                        <div class="text-xs text-gray-500">Team Member</div>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="w-3/12 py-4  rounded-lg border-2 border-dashed border-gray-200 shadow-sm">


            <div class="relative overflow-x-auto  sm:rounded-lg">
                <div class="mb-4  flex justify-center text-gray-900 ">
                    @if($project['thumbnail_image'])
                    <img class="object-cover w-40 h-40 rounded" src='/assets/images/projects/{{$project['thumbnail_image']}}' />
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
                            {{$project->division->group->name}}
                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 uppercase px-6 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-white">
                            Division
                        </div>
                        <div class="px-6 flex uppercase text-xs  text-gray-500">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z"></path>
                            </svg>
                            {{$project->division->name}}
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
                            Finance
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

                            1st Feb 2023
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
                            CM State
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <div class=" flex justify-end ">
        <x-secondary-button class="mr-2 my-4 text-sm p-2 rounded-lg shadow">Project Timeline</x-secondary-button>

        <x-danger-button wire:click="toggle('confirmingProjectTransfer')" class="my-4 text-sm p-2 rounded-lg shadow">Transfer Project </x-danger-button>

    </div>
    <div class="border-t-2 border-gray-200 border-dashed pt-4">
        <x-main-title>Project Manual</x-main-title>
        <x-sub-title>List of all the manuals published under this project</x-sub-title>
        <div class="py-4">
            <table class="w-full">
                <thead class="uppercase text-sm text-gray-700">
                    <th class="bg-gray-200 text-left px-2 w-36 py-2 border-r border-gray-300">Version</th>
                    <th class="bg-gray-200 text-left px-2 w-36 py-2 border-r border-gray-300">Published Date</th>
                    <th class="bg-gray-200 text-left px-2  py-2 border-r border-gray-300">Description</th>
                    <th class="bg-gray-200 text-left px-2 w-36 py-2 border-r border-gray-300">View</th>
                </thead>
                <tbody class="text-xs text-gray-700">
                    <tr class="hover:bg-gray-50">
                        <td class=" py-2 px-2  border border-gray-300">1.0.2</td>
                        <td class=" py-2 px-2 border border-gray-300">01-FEB-2023</td>
                        <td class=" py-2 px-2 border border-gray-300"></td>
                        <td class=" py-2 px-2 border border-gray-300">
                            <a href="#" class="text-blue-500">view</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class=" py-2 px-2  border border-gray-300">1.0.1</td>
                        <td class=" py-2 px-2 border border-gray-300">15-DEC-2022</td>
                        <td class=" py-2 px-2 border border-gray-300">Description</td>
                        <td class=" py-2 px-2 border border-gray-300">
                            <a href="#" class="text-blue-500">view</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class=" py-2 px-2  border border-gray-300">1.0.0</td>
                        <td class=" py-2 px-2 border border-gray-300">10-OCT-2022</td>
                        <td class=" py-2 px-2 border border-gray-300">Description</td>
                        <td class=" py-2 px-2 border border-gray-300">
                            <a href="#" class="text-blue-500">view</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <x-jet-confirmation-modal wire:model="confirmingProjectTransfer">


        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            <span class="text-red-800">Transfer Project?</span>
        </x-slot>
        <x-slot name="subtitle">
            Transfer of project to some other division.
        </x-slot>
        <x-slot name="content">
            <div class="bg-red-100 p-4 rounded-lg">
                <span class="text-xs font-semibold text-gray-700 uppercase mb-4">Transfer of any project to some other division will result in.</span>


                <ul class="list-disc list-inside leading-loose text-gray-500 text-xs uppercase">
                    <li>Current Project Head / HOD will not be able to access this project anymore.</li>
                    <li>All the approval requests will be routed to the new Project Head / HOD.</li>
                    <li>If new project head/HOD wants to reshuffle his project team, he can manually change team leader or team members.</li>


                </ul>

            </div>
            <div class="w-full flex flex-col justify-center items-center py-4">

                <div class="p-4 w-full border border-gray-500 border-dashed rounded-lg">
                    <div class="mb-2">
                        <x-main-title>Transfer project</x-main-title>
                    </div>

                    <div class="mb-2 text-bold  text-gray-500 py-2 my-2">{{$project['title']}}</div>

                    <div class="mb-2">
                        <x-main-title>transfer TO</x-main-title>
                    </div>

                    <x-select wire:model="newdivisionid" :userlist="$divisionlist">


                    </x-select>

                </div>



            </div>
            <x-main-title>
                <div class="text-center leading-loose">You are transferring <span class="text-rose-800">{{$project['title']}}</span> to <span class="text-orange-600">{{$this->getSelectedDivisionName()}}</span> </div>
            </x-main-title>




        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingProjectTransfer')" wire:loading.attr="disabled">
                Cancel
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="toggle('projectTransferFinal')" wire:loading.attr="disabled">
                Proceed
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
    <x-jet-confirmation-modal wire:model="projectTransferFinal">


        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            <span class="text-red-800">Transfer Project</span>
        </x-slot>
        <x-slot name="subtitle">
            Transfer of project to some other division.
        </x-slot>
        <x-slot name="content">

            <div class="w-full flex flex-col justify-center items-center py-4">

                <div class="p-4 w-full border border-gray-500 border-dashed rounded-lg">

                    <x-main-title>
                        <div class="text-center leading-loose">Are you sure you want to transfer <span class="text-rose-800">{{$project['title']}}</span> to <span class="text-orange-600">{{$this->getSelectedDivisionName()}}</span> </div>
                    </x-main-title>


                </div>



            </div>





        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('projectTransferFinal')" wire:loading.attr="disabled">
                Cancel
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="transferProject({{$project['id']}})" wire:loading.attr="disabled">
                Transfer it !
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>


</div>
