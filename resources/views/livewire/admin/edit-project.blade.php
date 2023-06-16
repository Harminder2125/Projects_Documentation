<div>
    <x-sub-title class="font-semibold">Basic details</x-sub-title>
    <div class="bg-gray-200 my-2 p-8 rounded-md mb-12">

        <div class="grid grid-cols-3 gap-2">
            <div>
                <x-jet-label for="cap" value="{{ __('Title') }}" />
                <x-input placeholder="Enter Project Title" required wire:model="project.title" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
            <div>
                <x-jet-label for="cap" value="{{ __('Abbreviation') }}" />
                <x-input placeholder="Enter Project Abbreviation" required wire:model="project.abbreviation" type="text" class="mt-1 block w-full" />

                <x-jet-input-error for="cap" class="mt-2" />
            </div>

            <div>
                <x-jet-label for="cap" value="{{ __('Category') }}" />
                <x-select type="text" class="mt-1 block w-full" wire:model="project.category" :userlist="$categories" />

                <x-jet-input-error for="cap" class="mt-2" />
            </div>
        </div>
        <div class="my-2">
            <x-jet-label for="cap" value="{{ __('Description') }}" />
            <textarea maxlength=8000 placeholder="Enter Project Description (Maximum 8000 Characters)" required wire:model="project.description" rows="4" class="mt-1 block p-2.5 w-full text-sm text-gray-900  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>


            <x-jet-input-error for="cap" class="mt-2" />
        </div>
    </div>

    <x-sub-title class="font-semibold">Launch Details</x-sub-title>
    <div class="my-2 grid grid-cols-4 gap-2 bg-gray-200  p-8 rounded-md mb-12">

        <div>
            <x-jet-label for="cap" value="{{ __('Publish Status') }}" />

            <x-select type="text" class="mt-1 block w-full" wire:model="project.publish_status" :userlist="$statuslist" />

            <x-jet-input-error for="cap" class="mt-2" />


        </div>

        <div>
            <x-jet-label for="cap" value="{{ __('Live Url') }}" />
            <x-input placeholder="Enter Live Website Url" wire:model="project.live_url" type="text" class="mt-1 block w-full" />

            <x-jet-input-error for="cap" class="mt-2" />
        </div>
        <div>
            <x-jet-label for="cap" value="{{ __('Launch Date') }}" />
            <x-input placeholder="Select Launch Date" wire:model="project.launch_date" type="date" class="mt-1 block w-full" />

            <x-jet-input-error for="cap" class="mt-2" />
        </div>
        <div>
            <x-jet-label for="cap" value="{{ __('Launched By') }}" />
            <x-input placeholder="Enter Details (Name/Designation)" wire:model="project.launched_by" type="text" class="mt-1 block w-full" />

            <x-jet-input-error for="cap" class="mt-2" />
        </div>

    </div>


    <x-sub-title class="font-semibold">Logo and Banner</x-sub-title>

    <div class="grid grid-cols-2 my-2 gap-2 bg-gray-200 rounded-md p-8">



        <div>


            <x-jet-label for="cap" value="{{ __('Logo Image') }}" />
            <x-input type="file" wire:model="project.edit_logo_image" class="mt-1 block w-full" />

            <x-jet-input-error for="cap" class="mt-2" />

            <div class="flex">

                @if($project['edit_logo_image']!='')

                <img src="{{$project['edit_logo_image']->temporaryUrl()}}" class="mt-2 w-32 h-32 rounded-md" />
                @elseif($project['logo_image']!='')
                <img src="/storage/{{$project['logo_image']}}" class="mt-2 w-32 h-32 rounded-md" />

                @else
                @endif
            </div>


        </div>
        <div>


            <x-jet-label for="cap" value="{{ __('Banner Image') }}" />
            <x-input wire:model="project.edit_banner_image" type="file" class="mt-1 block w-full" />

            <x-jet-input-error for="cap" class="mt-2" />
            <div class="flex">

                @if($project['edit_banner_image']!='')

                <img src="{{$project['edit_banner_image']->temporaryUrl()}}" class="mt-2 w-32 h-32 rounded-md" />
                @elseif($project['banner_image']!='')
                <img src="/storage/{{$project['banner_image']}}" class="mt-2 w-32 h-32 rounded-md" />

                @else
                @endif
            </div>



        </div>





    </div>

    @foreach ($featureboxes as $feature)
    <x-sub-title class="font-semibold mt-4">{{$feature->title}}</x-sub-title>
    <x-sub-title class="text-xs">{{$feature->subtitle}}</x-sub-title>

    <div class="flex flex-col bg-gray-200 rounded-md p-8">
        <div class="flex justify-end w-full">


            <a wire:click="openmodal({{$feature}})" class="bg-stone-300 cursor-pointer rounded-md hover:bg-stone-400 p-2">


                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg></a>



        </div>
        <div>
            <ul>
                @foreach($feature->featureboxentries as $fbe)
                <li class="flex">
                    <x-sub-title class="font-semibold">{{$fbe->title}} :</x-sub-title>
                    <x-sub-title class="">{{$fbe->description}}</x-sub-title>
                </li>

                @endforeach
            </ul>

        </div>
    </div>

    @endforeach


    <div class="flex justify-end mt-8">

        <a href="/admin/projects">

            <x-secondary-button class="text-sm rounded-lg shadow mr-2">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>




                back to projects</x-secondary-button>
        </a>

        <x-primary-button class="mr-4" wire:click="updateProjectDetails()">Update Project Details</x-primary-button>


        <x-dark-button wire:click="resetProject()">Reset Project Details</x-dark-button>




    </div>

    <x-jet-confirmation-modal wire:model="modaleditmode">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                {{-- <svg class="h-6 w-6 text-green-600" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg> --}}
                <object type="image/svg+xml" data="\assets\svg\{{$featurebox['icon']}}.svg" width="32" height="32"> </object>



            </div>
        </x-slot>
        <x-slot name="subtitle">
            {{$featurebox['subtitle']}}

        </x-slot>

        <x-slot name="title">
            {{$featurebox['title']}}
        </x-slot>

        <x-slot name="content">

            <div>

                <x-jet-validation-errors class="mb-4" />

                <div class="w-full flex gap-x-5">
                    <div class="w-full">
                        <x-jet-label for="name" value="{{ __('Title') }}" />
                        <x-input wire:model="featureboxdata.title" id="upd_name" class="block w-full" type="text" name="upd_name" required autofocus />
                    </div>
                </div>
                <div class="w-full flex gap-x-5">
                    <div class="w-full">
                        <x-jet-label for="name" value="{{ __('Description') }}" />
                        <x-input wire:model="featureboxdata.description" id="description" class="block w-full" type="text" name="description" required />
                    </div>
                </div>
                <div class="flex justify-end mt-2">
                    <x-primary-button class="!px-2 !py-2" wire:click="addFeatureData()">Add {{$featurebox['title']}} data</x-primary-button>
                </div>
                <div class="bg-stone-200 rounded-md mt-2 p-2">

                    @if(count($featurebox['entries'])>0)
                    @foreach($featurebox['entries'] as $key=>$fbe)
                    <div class="mb-2">
                        <div class="flex justify-between">
                            <x-sub-title class="font-semibold">{{$fbe['title']}}</x-sub-title>
                            <a class="p-1 bg-stone-200 hover:bg-stone-100 rounded-md" wire:click="removeEntry({{$key}})">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-4 h-4 stroke-red-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>


                            </a>
                        </div>
                        <div>
                            <x-sub-title class="text-xs">{{$fbe['description']}}</x-sub-title>

                        </div>



                    </div>
                    @endforeach
                    @else
                    <div class="flex justify-center items-center">
                        <x-sub-title>No Data Available !</x-sub-title>
                    </div>

                    @endif
                </div>




            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="closemodal()" wire:loading.attr="disabled">
                Close
            </x-jet-secondary-button>

            <x-primary-button class="ml-2" wire:click="saveFeatureBoxEntries()" wire:loading.attr="disabled">
                Save
            </x-primary-button>
        </x-slot>
    </x-jet-confirmation-modal>


</div>
