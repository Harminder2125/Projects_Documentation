<div class=" w-full flex flex-col justify-center items-center">
    <div class="w-8/12 flex bg-zinc-200 p-8 rounded-md">




        <div class="w-8/12">
            <div class="border border-gray-500 flex bg-white justify-center items-center  rounded-md px-1">
                <div class="px-2 border-r border-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>

                <x-jet-input type="text" placeholder="Start typing project name..." class="w-full border-0 h-12">
                </x-jet-input>

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

    <div class="w-8/12 grid grid-cols-3  gap-10 py-10">
        @foreach ($projects as $project)
            <div class="flex flex-col w-full h-48 bg-fuchsia-900 shadow-lg bg-zinc-50 rounded-md  justify-center items-center">
                <span class="font-inter font-semibold">({{ $project->abbreviation }})</span>
                
                <h2 class="font-semibold">{{$project->title}}</h2>
                
            </div>
        @endforeach
    </div>

</div>
