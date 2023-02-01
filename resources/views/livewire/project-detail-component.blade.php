<div>
    <div class="flex">
        <div class="flex flex-col bg-white  w-9/12 pr-4">

            <div class="pr-4 text-justify  ">
                {{$project['description']}}
            </div>


            <div class="my-4 mt-8">
                <h1 class="text-lg text-gray-700 font-semibold uppercase"> Project Team</h1>
            </div>

            <div class="grid gap-2 grid-cols-4">
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
        <div class="w-3/12 py-4  rounded-lg bg-gray-200">


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
                        <div scope="row" class="py-1 uppercase px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            State / Group
                        </div>
                        <div class="px-6 flex uppercase text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            {{$project->division->group->name}}
                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 uppercase px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Project Category
                        </div>
                        <div class="px-6 flex uppercase text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>
                            Finance
                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 uppercase px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Launch date
                        </div>
                        <div class="px-6 flex uppercase text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>

                            1st Feb 2023
                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 uppercase px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Launched By
                        </div>
                        <div class="px-6 flex uppercase text-gray-500">
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
        <button class="my-4 text-sm p-2 bg-fuchsia-900 text-white rounded-lg shadow">
            Transfer Project</button>
    </div>

</div>
