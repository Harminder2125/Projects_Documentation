<div class=" w-full flex flex-col justify-center items-center">
    <div class="w-8/12 flex bg-zinc-200 p-8 rounded-md">
        <div class="w-8/12">
            <div class="border border-gray-500 flex bg-white justify-center items-center  rounded-md px-1">
                <div class="px-2 border-r border-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
                <x-jet-input type="text" wire:model="searchTerm" placeholder="Start typing project name..." class="w-full border-0 h-12">
                </x-jet-input>{{$searchTerm}}
            </div>
        </div>
        <div class="w-2/12 pl-5">

            <div class=" w-full  border border-gray-500 rounded-md px-1 bg-white">

                <select id="state" name="state" class="border-0 w-full h-12">

                    <option value="m">
                        Punjab
                    </option>
                    <option value="f">
                        Haryana
                    </option>

                </select>
            </div>

        </div>
        <div class="w-2/12 pl-5" lex>

            <x-jet-button class="h-12">Search</x-jet-button>
        </div>


    </div>

    <div class="w-8/12 grid md:grid-cols-4 sm:grid-cols-1 xs:grid-cols-1 gap-y-10 py-10">
        @foreach ($projects as $project)
        <div class="relative px-4">
            <div class=" bg-gradient-to-r from-stone-200 to-stone-100 via-stone-200  rounded-lg flex flex-col justify-between  border-dashed border-gray-200 mb-1">

                <div class=" flex p-3 justify-center items-center border-b border-stone-300">


                    @if($project->thumbnail_image)
                    <div class="flex justify-center items-center">
                        <img src="./assets/images/projects/{{$project->thumbnail_image}}" class="w-16 h-16 rounded-full" />
                    </div>
                    @else
                    <div class=" flex justify-center items-center">
                        <div class="w-16 h-16 rounded-full bg-pink-900 flex justify-center items-center text-white uppercase">
                            {{$project->abbreviation}}
                        </div>

                    </div>
                    @endif

                    <div class="px-2">
                        <h4 class="mt-2 text-sm leading-normal text-gray-700 font-semibold uppercase leading-tight ">{{$project->title}} ({{$project->abbreviation}})</h4>

                    </div>
                </div>
                <div class="mt-1 p-6">

                    {{-- <div class="mt-2 flex text-ellipsis overflow-hidden text-justify">

                        <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                            Project Head

                        </span>
                        <span class="w-3/5 px-2 border-b border-dashed border-gray-200">
                            Mr. Anoop Kumar Jalali
                        </span>
                    </div>
                    <div class="mt-2 flex text-ellipsis overflow-hidden text-justify">

                        <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                            Launch Date

                        </span>
                        <span class="w-3/5 px-2 border-b border-dashed border-gray-200">
                            25-April-2018
                        </span>
                    </div>
                    <div class="mt-2 flex text-ellipsis overflow-hidden text-justify">

                        <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                            Contact No.

                        </span>
                        <span class="w-3/5 flex px-2 border-b border-dashed border-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            9888983051

                        </span>
                    </div>
                    <div class="mt-2 flex text-ellipsis overflow-hidden text-justify">

                        <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                            Contact Email

                        </span>
                        <span class="w-3/5 flex px-2 border-b border-dashed border-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>

                            harminder.singh90@nic.in

                        </span>
                    </div> --}}



                    <div class="mt-2 w-full flex">




                        <div class="flex bg-stone-300 rounded-lg px-1 py-1 mr-1">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-stone-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>


                            <p class="text-xs text-stone-500">{{$project->project_category->name}}</p>

                        </div>





                        <div class="flex bg-stone-300 rounded-lg px-1 py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-stone-500">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>

                            <p class="text-xs text-stone-500">{{$project->group->name}}</p>

                        </div>






                    </div>



                </div>
            </div>
        </div>


        @endforeach
    </div>

</div>
