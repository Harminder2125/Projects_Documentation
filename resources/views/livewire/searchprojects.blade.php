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

    <div class="w-8/12 grid md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 gap-10 py-10">
        @foreach ($projects as $project)
        <div class="relative px-4">
            <div class="bg-gray-100  rounded-lg flex flex-col justify-between border-2  border-dashed border-gray-200 mb-1">
                <div class="flex flex  bg-gray-200 p-3 justify-center items-center">

                    @if($project->thumbnail_image)
                    <div class="w-1/4 flex justify-center items-center">
                        <img src="./assets/images/projects/{{$project->thumbnail_image}}" class="w-24 h-24 rounded-full" />
                    </div>
                    @else
                    <div class="w-1/4 flex justify-center items-center">
                        <div class="w-24 h-24 rounded-full bg-gray-400 flex justify-center items-center text-white uppercase">
                            {{$project->abbreviation}}
                        </div>

                    </div>
                    @endif

                    <div class="w-3/4 p-6">
                        {{-- <div class="flex items-baseline rounded-full">
                            <span class="rounded-full bg-pink-800 text-white px-2 py-1 text-sm">{{$project->group->name}}</span>
                    </div> --}}
                    <h4 class="mt-2 text-sm leading-normal font-semibold uppercase leading-tight ">{{$project->title}}</h4>
                </div>
            </div>
            <div class="mt-1 p-6">
                <div class="mt-0 flex text-ellipsis overflow-hidden text-justify">

                    <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                        Alias

                    </span>
                    <span class="w-3/5 px-2 border-b border-dashed border-gray-200">
                        {{$project->abbreviation}}
                    </span>
                </div>
                <div class="mt-2 flex text-ellipsis overflow-hidden text-justify">

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
                </div>





                <div class="mt-2">
                    <p class="flex break-words justify-end text-pink-800 ">

                        <a href="" class="">View Manual</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    @endforeach
</div>

</div>
