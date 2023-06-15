 {{-- create new project --}}

 {{-- <img src="{{ url('storage/photos/avatar.png') }}" alt="" title="" /> --}}

 <div>
     <div class="flex justify-end items-center ">
         <a href="javascript:void(0)" wire:click="toggleAdvancedMode()" class="text-sky-600 py-4 px-2 rounded-md  hover:text-sky-500 uppercase">
             @if(!$advancedmode)
             View in advanced mode
             @else
             View in basic mode
             @endif
         </a>

     </div>

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


     @if($advancedmode) <x-sub-title class="font-semibold">Launch Details</x-sub-title>
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
     <x-sub-title class="font-semibold">Features</x-sub-title>

     <div class="grid grid-cols-2 my-2 gap-2 bg-gray-200 rounded-md p-8">



         <div>


             <x-jet-label for="cap" value="{{ __('Logo Image') }}" />
             <x-input type="file" wire:model="project.logo_image" class="mt-1 block w-full" />

             <x-jet-input-error for="cap" class="mt-2" />
             @if($project['logo_image']!='')
             <img src="{{$project['logo_image']->temporaryUrl()}}" class="mt-2 w-32 h-32 rounded-md" />

             @endif

         </div>
         <div>


             <x-jet-label for="cap" value="{{ __('Banner Image') }}" />
             <x-input wire:model="project.banner_image" type="file" class="mt-1 block w-full" />

             <x-jet-input-error for="cap" class="mt-2" />
             @if($project['banner_image']!='')
             <img src="{{$project['banner_image']->temporaryUrl()}}" class=" mt-2 w-32 h-32 rounded-md" />

             @endif

         </div>





     </div>

      {{-- <x-sub-title class="font-semibold mt-4 mb-2">Extended Features</x-sub-title>

     <div class="grid grid-cols-1 mb-8 gap-2 bg-gray-200 rounded-md p-8">
         <div class="flex justify-between items-center w-full">
             @if($project['project_head_id'])
             <div class="flex w-full px-4">
                 <div class="mx-2 w-12 h-12 rounded-full bg-fuchsia-900 text-sm font-semibold uppercase flex items-center justify-center text-white">
                     {{$this->getNameInitials($project['project_head_name'])}}
                 </div>
                 <div>
                     <div class="text-xs mt-2  uppercase font-semibold">
                         {{$project['project_head_name']}}

                     </div>
                     <div class="text-xs text-gray-500">Project Head</div>
                 </div>

             </div>
             <x-dark-button wire:click="toggle('projectheadmodal')">Update</x-dark-button>


             @else
             <div class="flex">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-orange-600  mr-2">

                     <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                 </svg>


                 <x-sub-title>No project head assigned !</x-sub-title>
             </div>
             <x-primary-button wire:click="toggle('projectheadmodal')">Assign</x-primary-button>


             @endif
         </div>
     </div> --}}
     @endif
     <x-sub-title class="font-semibold">Assign Project Head</x-sub-title>

     <div class="grid grid-cols-1 my-2 gap-2 bg-gray-200 rounded-md p-8">
         <div class="flex justify-between items-center w-full">
             @if($project['project_head_id'])
             <div class="flex w-full px-4">
                 <div class="mx-2 w-12 h-12 rounded-full bg-fuchsia-900 text-sm font-semibold uppercase flex items-center justify-center text-white">
                     {{$this->getNameInitials($project['project_head_name'])}}
                 </div>
                 <div>
                     <div class="text-xs mt-2  uppercase font-semibold">
                         {{$project['project_head_name']}}

                     </div>
                     <div class="text-xs text-gray-500">Project Head</div>
                 </div>

             </div>
             <x-dark-button wire:click="toggle('projectheadmodal')">Update</x-dark-button>


             @else
             <div class="flex">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-orange-600  mr-2">

                     <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                 </svg>


                 <x-sub-title>No project head assigned !</x-sub-title>
             </div>
             <x-primary-button wire:click="toggle('projectheadmodal')">Assign</x-primary-button>


             @endif
         </div>
     </div>

     <x-sub-title class="font-semibold mt-4 mb-2">Extended Features</x-sub-title>

     <div class="grid grid-cols-1 mb-8 gap-2 bg-gray-200 rounded-md p-8">
         <div class="flex justify-between items-center w-full">
             @if($project['project_head_id'])
             <div class="flex w-full px-4">
                 <div class="mx-2 w-12 h-12 rounded-full bg-fuchsia-900 text-sm font-semibold uppercase flex items-center justify-center text-white">
                     {{$this->getNameInitials($project['project_head_name'])}}
                 </div>
                 <div>
                     <div class="text-xs mt-2  uppercase font-semibold">
                         {{$project['project_head_name']}}

                     </div>
                     <div class="text-xs text-gray-500">Project Head</div>
                 </div>

             </div>
             <x-dark-button wire:click="toggle('projectheadmodal')">Update</x-dark-button>


             @else
             <div class="flex">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-orange-600  mr-2">

                     <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                 </svg>


                 <x-sub-title>No project head assigned !</x-sub-title>
             </div>
             <x-primary-button wire:click="toggle('projectheadmodal')">Assign</x-primary-button>


             @endif
         </div>
     </div>

    
    
     <div>
         <x-jet-validation-errors class="mb-4" />


     </div>

     <div class="flex justify-end mt-8">

         <a href="/admin/projects">
             <x-secondary-button class="text-sm rounded-lg shadow mr-2">

                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                 </svg>




                 back to projects</x-secondary-button>
         </a>

         <x-primary-button class="mr-4" wire:click="createProject()">Create Project</x-primary-button>


         <x-dark-button wire:click="resetProject()">Reset Project Details</x-dark-button>




     </div>
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



 </div>
