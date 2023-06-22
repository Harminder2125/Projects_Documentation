<div>

    <div>
              @if(count($remarksdata)>0)
                      
                            @foreach ($remarksdata as $rem)
                                <div class="p-2 rounded-md bg-red-700/10 mb-2 flex items-start justify-between">
                                    <div class="">
                                    {{$rem->remarks}}
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <div class="font-bold">{{$rem->user->name}}</div>

                                    <div>{{$rem->created_at}}</div>
                                    </div>
                                 
                                 
                                </div>
                               
                            @endforeach

                        @endif
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

    <x-sub-title class="font-semibold">Launch Details</x-sub-title>
    <div class="my-2 grid grid-cols-3 gap-2 bg-gray-200  p-8 rounded-md mb-12">

        {{-- <div>
            <x-jet-label for="cap" value="{{ __('Publish Status') }}" />

        <x-select type="text" class="mt-1 block w-full" wire:model="project.publish_status" :userlist="$statuslist" />

        <x-jet-input-error for="cap" class="mt-2" />


    </div> --}}

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
<x-sub-title class="font-semibold mt-4 ">{{$feature->title}}</x-sub-title>
<x-sub-title class="text-xs mb-1">{{$feature->subtitle}}</x-sub-title>


<div class="flex flex-col bg-gray-200 rounded-md p-6 relative">
    <div class="flex justify-end w-full absolute top-2 right-2">

        @if($feature->icon == 'manual')
        <a wire:click="openmanualmodal({{$feature}})" class="bg-stone-300 cursor-pointer rounded-md hover:bg-stone-400 p-2">


            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg></a>

        @else

        <a wire:click="openmodal({{$feature}})" class="bg-stone-300 cursor-pointer rounded-md hover:bg-stone-400 p-2">


            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg></a>
        @endif



    </div>
    <div>
        <ul class="grid grid-cols-1 w-full">

            @if($feature->icon == 'manual')
            @foreach($manuals as $key=>$x)
            <a href="/storage/{{$x->has_document_manual}}" target="_blank">
                <li class="flex px-4 py-0">

                    <div class="flex w-full mr-5  p-2 mb-2 justify-between border-b border-dashed
                 border-stone-400">
                        <div class="flex items-center">
                            <svg class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56 56" xml:space="preserve" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path style="fill:#E9E9E0;" d="M36.985,0H7.963C7.155,0,6.5,0.655,6.5,1.926V55c0,0.345,0.655,1,1.463,1h40.074 c0.808,0,1.463-0.655,1.463-1V12.978c0-0.696-0.093-0.92-0.257-1.085L37.607,0.257C37.442,0.093,37.218,0,36.985,0z"></path>
                                        <polygon style="fill:#D9D7CA;" points="37.5,0.151 37.5,12 49.349,12 "></polygon>
                                        <path style="fill:#CC4B4C;" d="M19.514,33.324L19.514,33.324c-0.348,0-0.682-0.113-0.967-0.326 c-1.041-0.781-1.181-1.65-1.115-2.242c0.182-1.628,2.195-3.332,5.985-5.068c1.504-3.296,2.935-7.357,3.788-10.75 c-0.998-2.172-1.968-4.99-1.261-6.643c0.248-0.579,0.557-1.023,1.134-1.215c0.228-0.076,0.804-0.172,1.016-0.172 c0.504,0,0.947,0.649,1.261,1.049c0.295,0.376,0.964,1.173-0.373,6.802c1.348,2.784,3.258,5.62,5.088,7.562 c1.311-0.237,2.439-0.358,3.358-0.358c1.566,0,2.515,0.365,2.902,1.117c0.32,0.622,0.189,1.349-0.39,2.16 c-0.557,0.779-1.325,1.191-2.22,1.191c-1.216,0-2.632-0.768-4.211-2.285c-2.837,0.593-6.15,1.651-8.828,2.822 c-0.836,1.774-1.637,3.203-2.383,4.251C21.273,32.654,20.389,33.324,19.514,33.324z M22.176,28.198 c-2.137,1.201-3.008,2.188-3.071,2.744c-0.01,0.092-0.037,0.334,0.431,0.692C19.685,31.587,20.555,31.19,22.176,28.198z M35.813,23.756c0.815,0.627,1.014,0.944,1.547,0.944c0.234,0,0.901-0.01,1.21-0.441c0.149-0.209,0.207-0.343,0.23-0.415 c-0.123-0.065-0.286-0.197-1.175-0.197C37.12,23.648,36.485,23.67,35.813,23.756z M28.343,17.174 c-0.715,2.474-1.659,5.145-2.674,7.564c2.09-0.811,4.362-1.519,6.496-2.02C30.815,21.15,29.466,19.192,28.343,17.174z M27.736,8.712c-0.098,0.033-1.33,1.757,0.096,3.216C28.781,9.813,27.779,8.698,27.736,8.712z"></path>
                                        <path style="fill:#CC4B4C;" d="M48.037,56H7.963C7.155,56,6.5,55.345,6.5,54.537V39h43v15.537C49.5,55.345,48.845,56,48.037,56z"></path>
                                        <g>
                                            <path style="fill:#FFFFFF;" d="M17.385,53h-1.641V42.924h2.898c0.428,0,0.852,0.068,1.271,0.205 c0.419,0.137,0.795,0.342,1.128,0.615c0.333,0.273,0.602,0.604,0.807,0.991s0.308,0.822,0.308,1.306 c0,0.511-0.087,0.973-0.26,1.388c-0.173,0.415-0.415,0.764-0.725,1.046c-0.31,0.282-0.684,0.501-1.121,0.656 s-0.921,0.232-1.449,0.232h-1.217V53z M17.385,44.168v3.992h1.504c0.2,0,0.398-0.034,0.595-0.103 c0.196-0.068,0.376-0.18,0.54-0.335c0.164-0.155,0.296-0.371,0.396-0.649c0.1-0.278,0.15-0.622,0.15-1.032 c0-0.164-0.023-0.354-0.068-0.567c-0.046-0.214-0.139-0.419-0.28-0.615c-0.142-0.196-0.34-0.36-0.595-0.492 c-0.255-0.132-0.593-0.198-1.012-0.198H17.385z"></path>
                                            <path style="fill:#FFFFFF;" d="M32.219,47.682c0,0.829-0.089,1.538-0.267,2.126s-0.403,1.08-0.677,1.477s-0.581,0.709-0.923,0.937 s-0.672,0.398-0.991,0.513c-0.319,0.114-0.611,0.187-0.875,0.219C28.222,52.984,28.026,53,27.898,53h-3.814V42.924h3.035 c0.848,0,1.593,0.135,2.235,0.403s1.176,0.627,1.6,1.073s0.74,0.955,0.95,1.524C32.114,46.494,32.219,47.08,32.219,47.682z M27.352,51.797c1.112,0,1.914-0.355,2.406-1.066s0.738-1.741,0.738-3.09c0-0.419-0.05-0.834-0.15-1.244 c-0.101-0.41-0.294-0.781-0.581-1.114s-0.677-0.602-1.169-0.807s-1.13-0.308-1.914-0.308h-0.957v7.629H27.352z"></path>
                                            <path style="fill:#FFFFFF;" d="M36.266,44.168v3.172h4.211v1.121h-4.211V53h-1.668V42.924H40.9v1.244H36.266z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>


                            <x-main-title class="text-stone-800 ml-4">{{$x->title}}</x-main-title>
                        </div>
                        <div>{{$x->version}}</div>
                    </div>

                </li>
            </a>
            @endforeach


            @else


            @foreach($feature->featureboxentries->groupBy('title') as $key=>$x)
            <li class="flex items-start px-4 py-0">
                <svg class="w-4 h-4 mt-2 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <div class="rounded-lg w-full">
                    <h3 class="text-gray-800 text-lg font-semibold mb-0 flex items-center">

                        {{$key}}</h3>
                    <ul class="list-disc ml-4">
                        @foreach($x as $item)
                        <li>
                            <p class="text-gray-600">

                                {{$item->description}}</p>
                        </li>

                        @endforeach
                    </ul>

                </div>
            </li>
            @endforeach
            @endif

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
    <x-dark-button wire:click="resetProject()">Reset Project Details</x-dark-button>
    <x-primary-button class="mr-4 ml-4" wire:click="updateProjectDetails()">Update Details</x-primary-button>
    <x-success-button class="mr-4" wire:click="updateProjectDetails()" wire:click="toggleapprovalmodal()">Update & Submit for approval</x-success-button>








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


<x-jet-confirmation-modal wire:model="modaleditmanual">

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
                    <x-input wire:model="editmanual.title" id="upd_name" class="block w-full" type="text" name="upd_name" required autofocus />
                </div>
            </div>
            <div class="w-full flex gap-x-5 mt-2">

                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('Version') }}" />
                    <x-input wire:model="editmanual.version" id="description" class="block w-full" type="text" name="description" placeholder="1.0" required />
                </div>
            </div>
            <div class="w-full flex gap-x-5 mt-2">

                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('Description') }}" />
                    <x-input wire:model="editmanual.major_changes" id="description" class="block w-full" type="text" name="description" required />
                </div>
            </div>
            <div class="w-full flex gap-x-5 mt-2">

                <div class="w-full bg-stone-100 rounded-md p-2">
                    <x-jet-label for="name" value="{{ __('PDF Manual') }}" />
                    <div>

                        <x-input wire:model="pdf" type="file" class="mt-1 block w-full" />

                        <x-jet-input-error for="cap" class="mt-2" />

                    </div>

                </div>
            </div>

            <div class="flex justify-end mt-2">
                <x-primary-button class="!px-2 !py-2" wire:click="addProjectManual()">Add Manual</x-primary-button>
            </div>
            <div class="bg-stone-200 rounded-md mt-2 p-2">

                @if(count($manuals)>0)
                @foreach($manuals as $key=>$man)
                <div class="mb-2">
                    <div class="flex justify-between">
                        <x-sub-title class="font-semibold">{{$man['title']}}({{$man['version']}})</x-sub-title>
                        <a class="p-1 bg-stone-200 hover:bg-stone-100 rounded-md" wire:click="confirmManualDeletion({{$man}})">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-4 h-4 stroke-red-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>


                        </a>
                    </div>
                    <div>
                        <x-sub-title class="text-xs">{{$man['major_changes']}}</x-sub-title>

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
        <x-jet-secondary-button wire:click="togglemanualmodal()" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        {{-- <x-primary-button class="ml-2" wire:click="saveFeatureBoxEntries()" wire:loading.attr="disabled">
            Save
        </x-primary-button> --}}
    </x-slot>
</x-jet-confirmation-modal>




<x-jet-confirmation-modal wire:model="modalforapproval">

    <x-slot name="icon">
        <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-6 w-6 text-gray-900" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>





        </div>
    </x-slot>
    <x-slot name="title">
        Update and Submit for approval

    </x-slot>

    <x-slot name="subtitle">
        Update the details and submit to admin for approval.
    </x-slot>

    <x-slot name="content">

        <div>

            <x-jet-validation-errors class="mb-4" />
            <div class="bg-orange-600/10 rounded-md border border-orange-200 px-4 ">
                <ul class="list-disc p-4">
                    <li>
                        <x-sub-title class="text-xs text-orange-500 font-semibold">Projects details submitted by you will be forwarded to Admin for Approval and Publishing.</x-sub-title>
                    </li>
                    <li>
                        <x-sub-title class="text-xs text-orange-500 font-semibold">You will not be able to edit project details after submission to Admin.</x-sub-title>

                    </li>


                </ul>

            </div>

            <h1 class="font-semibold text-md text-gray-800 mt-4"> Are you sure you want to submit following details to Admin for approval and publishing ?</h1>

            <div class="w-full flex gap-x-5 bg-stone-100 rounded-md p-2 mb-2 border-dotted border-2
                         border-orange-600/40">
                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('Title') }}" />
                    <div class="pb-3  mb-2">
                        @if($project['title']!=null)
                        {{$project['title']}}

                        @else
                        NA
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full flex gap-x-5 bg-stone-100 rounded-md p-2 mb-2 border-dotted border-2
                         border-orange-600/40">
                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('Abbreviation') }}" />
                    <div class="pb-3  mb-2">
                        @if($project['abbreviation']!=null)
                        {{$project['abbreviation']}}
                        @else
                        NA
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full flex gap-x-5  bg-stone-100 rounded-md p-2 mb-2 border-dotted border-2
                         border-orange-600/40">
                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('Description') }}" />
                    <div class="pb-3  mb-2">
                        @if($project['description']!=null)
                        {{$project['description']}}
                        @else
                        NA
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full flex gap-x-5 bg-stone-100 rounded-md p-2 mb-2 border-dotted border-2
                         border-orange-600/40">
                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('Category') }}" />
                    <div class="pb-3  mb-2">
                        @if($project['category']!=null)
                        <x-select disabled type="text" class="mt-1 block w-full !border-0" wire:model="project.category" :userlist="$categories" />

                        @else
                        NA
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full flex gap-x-5 bg-stone-100 rounded-md p-2 mb-2 border-dotted border-2
                         border-orange-600/40">
                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('Launched_by') }}" />
                    <div class="pb-3  mb-2">
                        @if($project['launched_by']!=null)
                        {{$project['launched_by']}}
                        @else
                        NA
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full flex gap-x-5 bg-stone-100 rounded-md p-2 mb-2 border-dotted border-2
                         border-orange-600/40">
                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('logo_image') }}" />
                    <div class="pb-3  mb-2">
                        @if($project['edit_logo_image']!='')

                        <img src="{{$project['edit_logo_image']->temporaryUrl()}}" class="mt-2 w-32 h-32 rounded-md" />
                        @elseif($project['logo_image']!='')
                        <img src="/storage/{{$project['logo_image']}}" class="mt-2 w-32 h-32 rounded-md" />

                        @else
                        @endif

                    </div>
                </div>
            </div>

            <div class="w-full flex gap-x-5 bg-stone-100 rounded-md p-2 mb-2 border-dotted border-2
                         border-orange-600/40">
                <div class="w-full">
                    <x-jet-label for="name" value="{{ __('banner_image') }}" />
                    <div class="pb-3  mb-2">
                        @if($project['edit_banner_image']!='')

                        <img src="{{$project['edit_banner_image']->temporaryUrl()}}" class="mt-2 w-32 h-32 rounded-md" />
                        @elseif($project['banner_image']!='')
                        <img src="/storage/{{$project['banner_image']}}" class="mt-2 w-32 h-32 rounded-md" />

                        @else
                        @endif

                    </div>
                </div>
            </div>

            <div class="w-full flex gap-x-5 ">
                {{-- <div class="w-full">
                    @dd($featurebox)
                    @if($featurebox)
                    <div class="pb-2  mb-2">
                        @foreach ($featurebox as $fb)
                        <div class="bg-stone-100 rounded-md p-2 mb-2  border-dotted border-2
                         border-orange-600/40 ">
                            <div class="py-2">

                                <x-main-title>
                                    {{$fb['title']}}
                </x-main-title>
                <x-sub-title>
                    {{$fb['subtitle']}}
                </x-sub-title>
            </div>

            <div class="ml-6">
                <ul class="list-disc">
                    @foreach ($fb['entries'] as $fbe)
                    <li>
                        <div class="">
                            {{$fbe->title}}
                            {{$fbe->description}}
                        </div>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>



        @endforeach
        </div>
        @endif
        </div> --}}
        </div>

        <div class="bg-orange-600/10 rounded-md border border-orange-200 px-4 ">
            <ul class="list-disc p-4">
                <li>
                    <x-sub-title class="text-xs text-orange-500 font-semibold">
                        Projects details submitted and forwarded to Admin for Approval and Publishing.</x-sub-title>
                </li>
                <li>
                    <x-sub-title class="text-xs text-orange-500 font-semibold">
                        You can not edit project details now.</x-sub-title>

                </li>


            </ul>

        </div>





        </div>

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="toggleapprovalmodal()" wire:loading.attr="disabled">
            Don't Send
        </x-jet-secondary-button>

        <x-primary-button class="ml-2" wire:click="submitForApproval()" wire:loading.attr="disabled">
            Send for Approval
        </x-primary-button>
    </x-slot>
</x-jet-confirmation-modal>


<x-jet-confirmation-modal wire:model="manualdeletionmodal">

    <x-slot name="icon">
        <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-6 w-6 text-gray-900" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>





        </div>
    </x-slot>
    <x-slot name="title">
        Confirm Manual Deletion

    </x-slot>

    <x-slot name="subtitle">
        This action will permanently remove the manual from the system.
    </x-slot>

    <x-slot name="content">

        <div>

            <h1 class="font-semibold text-md text-gray-800 mt-4"> Are you sure you want to remove this manual?</h1>

            <div class="bg-orange-600/10 rounded-md border border-orange-200 p-4 mt-3">

                <div class="mb-3">
                    <x-sub-title class="font-semibold text-gray-800 text-xs">Title</x-sub-title>
                    <x-sub-title class="text-xs">{{$manualToDelete['title']}}</x-sub-title>
                </div>
                <div class="mb-3">
                    <x-sub-title class="font-semibold text-gray-800 text-xs">Version</x-sub-title>
                    <x-sub-title class="text-xs">{{$manualToDelete['version']}}</x-sub-title>
                </div>
                <div class="mb-3">
                    <x-sub-title class="font-semibold text-gray-800 text-xs">Description</x-sub-title>
                    <x-sub-title class="text-xs">{{$manualToDelete['major_changes']}}</x-sub-title>
                </div>
                <div class="mb-3">
                    <x-sub-title class="font-semibold text-gray-800 text-xs mb-2">Manual (PDF)</x-sub-title>
                    <a href="/storage/{{$manualToDelete['has_document_manual']}}" target="_blank">

                        <svg class="w-12 h-12" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56 56" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path style="fill:#E9E9E0;" d="M36.985,0H7.963C7.155,0,6.5,0.655,6.5,1.926V55c0,0.345,0.655,1,1.463,1h40.074 c0.808,0,1.463-0.655,1.463-1V12.978c0-0.696-0.093-0.92-0.257-1.085L37.607,0.257C37.442,0.093,37.218,0,36.985,0z"></path>
                                    <polygon style="fill:#D9D7CA;" points="37.5,0.151 37.5,12 49.349,12 "></polygon>
                                    <path style="fill:#CC4B4C;" d="M19.514,33.324L19.514,33.324c-0.348,0-0.682-0.113-0.967-0.326 c-1.041-0.781-1.181-1.65-1.115-2.242c0.182-1.628,2.195-3.332,5.985-5.068c1.504-3.296,2.935-7.357,3.788-10.75 c-0.998-2.172-1.968-4.99-1.261-6.643c0.248-0.579,0.557-1.023,1.134-1.215c0.228-0.076,0.804-0.172,1.016-0.172 c0.504,0,0.947,0.649,1.261,1.049c0.295,0.376,0.964,1.173-0.373,6.802c1.348,2.784,3.258,5.62,5.088,7.562 c1.311-0.237,2.439-0.358,3.358-0.358c1.566,0,2.515,0.365,2.902,1.117c0.32,0.622,0.189,1.349-0.39,2.16 c-0.557,0.779-1.325,1.191-2.22,1.191c-1.216,0-2.632-0.768-4.211-2.285c-2.837,0.593-6.15,1.651-8.828,2.822 c-0.836,1.774-1.637,3.203-2.383,4.251C21.273,32.654,20.389,33.324,19.514,33.324z M22.176,28.198 c-2.137,1.201-3.008,2.188-3.071,2.744c-0.01,0.092-0.037,0.334,0.431,0.692C19.685,31.587,20.555,31.19,22.176,28.198z M35.813,23.756c0.815,0.627,1.014,0.944,1.547,0.944c0.234,0,0.901-0.01,1.21-0.441c0.149-0.209,0.207-0.343,0.23-0.415 c-0.123-0.065-0.286-0.197-1.175-0.197C37.12,23.648,36.485,23.67,35.813,23.756z M28.343,17.174 c-0.715,2.474-1.659,5.145-2.674,7.564c2.09-0.811,4.362-1.519,6.496-2.02C30.815,21.15,29.466,19.192,28.343,17.174z M27.736,8.712c-0.098,0.033-1.33,1.757,0.096,3.216C28.781,9.813,27.779,8.698,27.736,8.712z"></path>
                                    <path style="fill:#CC4B4C;" d="M48.037,56H7.963C7.155,56,6.5,55.345,6.5,54.537V39h43v15.537C49.5,55.345,48.845,56,48.037,56z"></path>
                                    <g>
                                        <path style="fill:#FFFFFF;" d="M17.385,53h-1.641V42.924h2.898c0.428,0,0.852,0.068,1.271,0.205 c0.419,0.137,0.795,0.342,1.128,0.615c0.333,0.273,0.602,0.604,0.807,0.991s0.308,0.822,0.308,1.306 c0,0.511-0.087,0.973-0.26,1.388c-0.173,0.415-0.415,0.764-0.725,1.046c-0.31,0.282-0.684,0.501-1.121,0.656 s-0.921,0.232-1.449,0.232h-1.217V53z M17.385,44.168v3.992h1.504c0.2,0,0.398-0.034,0.595-0.103 c0.196-0.068,0.376-0.18,0.54-0.335c0.164-0.155,0.296-0.371,0.396-0.649c0.1-0.278,0.15-0.622,0.15-1.032 c0-0.164-0.023-0.354-0.068-0.567c-0.046-0.214-0.139-0.419-0.28-0.615c-0.142-0.196-0.34-0.36-0.595-0.492 c-0.255-0.132-0.593-0.198-1.012-0.198H17.385z"></path>
                                        <path style="fill:#FFFFFF;" d="M32.219,47.682c0,0.829-0.089,1.538-0.267,2.126s-0.403,1.08-0.677,1.477s-0.581,0.709-0.923,0.937 s-0.672,0.398-0.991,0.513c-0.319,0.114-0.611,0.187-0.875,0.219C28.222,52.984,28.026,53,27.898,53h-3.814V42.924h3.035 c0.848,0,1.593,0.135,2.235,0.403s1.176,0.627,1.6,1.073s0.74,0.955,0.95,1.524C32.114,46.494,32.219,47.08,32.219,47.682z M27.352,51.797c1.112,0,1.914-0.355,2.406-1.066s0.738-1.741,0.738-3.09c0-0.419-0.05-0.834-0.15-1.244 c-0.101-0.41-0.294-0.781-0.581-1.114s-0.677-0.602-1.169-0.807s-1.13-0.308-1.914-0.308h-0.957v7.629H27.352z"></path>
                                        <path style="fill:#FFFFFF;" d="M36.266,44.168v3.172h4.211v1.121h-4.211V53h-1.668V42.924H40.9v1.244H36.266z"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </a>
                </div>

                </>
            </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="toggleManualDeletion()" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-primary-button class="ml-2" wire:click="removeManualEntry({{$this->manualToDelete['id']}})" wire:loading.attr="disabled">
            Delete
        </x-primary-button>
    </x-slot>
</x-jet-confirmation-modal>




</div>
