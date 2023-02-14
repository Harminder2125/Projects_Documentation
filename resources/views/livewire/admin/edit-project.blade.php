 {{-- create new project --}}

 {{-- <img src="{{ url('storage/photos/avatar.png') }}" alt="" title="" /> --}}

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


 </div>
