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

    <div class="flex bg-gray-200 rounded-md p-8">
        <div class="flex justify-end w-full">


            <a wire:click="openmodal('{{$feature->title}}' ,'{{$feature->subtitle}}','{{$feature->icon}}')" class="bg-stone-300 cursor-pointer rounded-md hover:bg-stone-400 p-2">


                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg></a>

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
                <object type="image/svg+xml" data="\assets\svg\{{$modalData['icon']}}.svg" width="32" height="32"> </object>



            </div>
        </x-slot>
        <x-slot name="subtitle">
            {{$modalData['subtitle']}}

        </x-slot>

        <x-slot name="title">
            {{$modalData['title']}}
        </x-slot>

        <x-slot name="content">

            <div>

                <x-jet-validation-errors class="mb-4" />
                <form method="POST">
                    @csrf
                    <div class="w-full flex gap-x-5">
                        <div class="w-full">
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-input value="" id="upd_name" class="block w-full" type="text" name="upd_name" required autofocus autocomplete="name" />
                        </div>


                    </div>

                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">

                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-input id="upd_email" class="block w-full" type="email" name="upd_email" :value="old('email')" required />




                        </div>

                        <div class="mt-4 w-full">

                            <x-jet-label for="mobile" value="{{ __('Mobile') }}" />
                            <x-input id="upd_mobile" class="block w-full" type="text" name="upd_mobile" required />




                        </div>
                    </div>
                    <div class="flex gap-x-5">

                        <div class="mt-4 w-full">

                            <x-jet-label for="empcode" value="{{ __('Empcode') }}" />
                            <x-input id="upd_empcode" class="block w-full" type="text" name="upd_empcode" :value="old('empcode')" required />




                        </div>
                        <div class="mt-4 w-full">

                            <x-jet-label for="designation" value="{{ __('Designation') }}" />
                            <x-input id="upd_designation" class="block w-full" type="text" name="upd_designation" :value="old('designation')" required />




                        </div>
                    </div>

                </form>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="closemodal()" wire:loading.attr="disabled">
                Close
            </x-jet-secondary-button>

            <x-primary-button class="ml-2" wire:loading.attr="disabled">
                Update User Details
            </x-primary-button>
        </x-slot>
    </x-jet-confirmation-modal>


</div>
