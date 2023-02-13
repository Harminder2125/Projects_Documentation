<div>
    <div class="w-full bg-gray-200 rounded-md p-8 flex justify-between items-center mb-4">

        <div class="w-2/5 px-4">
            <x-input type="text" wire:model.debounce.500ms="search" placeholder="Search Project..." class="w-full border-0 h-12 rounded-lg">

            </x-input>
        </div>
        <div class="w-1/5 px-4">

            <x-select wire:model="category" :userlist="$categorylist">


            </x-select>
        </div>

        <div class=" w-1/5 px-4 border border-purple-100 mt-1 py-1 bg-white">

            <select class=" w-full form-select border-0 focus:ring-0" wire:model="status">

                <option value="SELECT">Select Option</option>
                @foreach($statuslist as $st)
                <option value="{{$st['publish_status']}}">{{$st['publish_status']}}</option>

                @endforeach

            </select>

        </div>
        <div class="w-1/5 px-10">
            <x-primary-button class="w-full">Search</x-primary-button>
        </div>


    </div>
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


                <td class="px-6 py-4">{{$project['category']}}</td>


                <td class="px-6 py-4">{{$project['category']}}</td>

                <td class="font-semibold px-6 py-4 {{$project['publish_status']=='PUBLISHED'? 'text-green-700': 'text-red-700'}}">{{$project['publish_status']}}</td>

                <td class="px-6 py-4 flex">
                    <x-primary-button wire:click="openUserForEditing({{$project['id']}})" class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>


                    </x-primary-button>



                    <x-jet-danger-button wire:click="openUserForDeletion({{$project['id']}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>


                    </x-jet-danger-button>



                </td>



            </tr>
            @endforeach

            @if($allprojects->count() ==0)
            <td colspan="6">
                <div class="flex w-full justify-center items-center py-5">
                    <p class="text-gray-400">No record found containing ...</p>
                </div>
            </td>

            @endif

        </tbody>
    </table>
    <div class="py-3" wire:key="$allusers->id">

        {{$allprojects->links()}}
    </div>

</div>
