<x-app-layout>



    <x-slot name="title">
        {{$project_name}}
    </x-slot>
    <x-slot name="subtitle">
        {{$abbreviation}}
    </x-slot>

    {{-- create new project --}}
    <div class="mt-4">
        <div class="grid my-2 grid-cols-3 gap-2">
            <div>
                <x-jet-label for="cap" value="{{ __('Title') }}" />
                <x-input placeholder="Enter Project Title" required id="cap" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
            <div>
                <x-jet-label for="cap" value="{{ __('Abbreviation') }}" />
                <x-input placeholder="Enter Project Abbreviation" required id="cap" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>

            <div>
                <x-jet-label for="cap" value="{{ __('Category') }}" />
                <x-input id="cap" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
        </div>
        <div class="my-2">
            <x-jet-label for="cap" value="{{ __('Description') }}" />
            <textarea maxlength=8000 placeholder="Enter Project Description (Maximum 8000 Characters)" required rows="4" class="block p-2.5 w-full text-sm text-gray-900  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  ></textarea>
            <x-jet-input-error for="cap" class="mt-2" />
        </div>
        <div class="my-2 grid grid-cols-3 gap-2">
            <div>
                <x-jet-label for="cap" value="{{ __('Live Url') }}" />
                <x-input placeholder="Enter Live Website Url" id="cap" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
            <div>
                <x-jet-label for="cap" value="{{ __('Launch Date') }}" />
                <x-input placeholder="Select Launch Date" id="cap" type="date" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
             <div>
                <x-jet-label for="cap" value="{{ __('Launched By') }}" />
                <x-input placeholder="Enter Details (Name/Designation)"  id="cap" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
           
        </div>
        <div class="grid grid-cols-3 gap-2">
           
          
            <div>
                <x-jet-label for="cap" value="{{ __('Logo Image') }}" />
                <x-input id="cap" type="file" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>
            <div>
                <x-jet-label for="cap" value="{{ __('Banner Image') }}" />
                <x-input id="cap" type="file" class="mt-1 block w-full" />
                <x-jet-input-error for="cap" class="mt-2" />
            </div>


          

           
        </div>

    </div>



</x-app-layout>
