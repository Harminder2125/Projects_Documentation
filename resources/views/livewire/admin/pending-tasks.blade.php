<div>
    @if(Auth::user()->isAdmin())
    <div class="bg-stone-200 p-4 flex justify-end items-center w-full mb-2">
        <div class="flex items-center mr-4">
            <div class="w-4 h-4 bg-red-700/90 mr-1 mt-0 rounded-md"></div>
            <x-sub-title class="!text-xs font-semibold !text-red-700">Pending at your end</x-sub-title>
        </div>
        <div class="flex items-center">
            <div class="w-4 h-4 bg-orange-500/90 mr-1 mt-0 rounded-md"></div>
            <x-sub-title class="!text-xs font-semibold !text-orange-500">Pending at Project Head end</x-sub-title>
        </div>

    </div>
    @else
    <div class="bg-stone-200 p-4 flex justify-end items-center w-full mb-2">
        <div class="flex items-center mr-4">
            <div class="w-4 h-4 bg-red-700/90 mr-1 mt-0 rounded-md"></div>
            <x-sub-title class="!text-xs font-semibold !text-red-700">Pending at your end</x-sub-title>
        </div>
        <div class="flex items-center">
            <div class="w-4 h-4 bg-green-700/90 mr-1 mt-0 rounded-md"></div>
            <x-sub-title class="!text-xs font-semibold !text-green-600">Submitted to Admin</x-sub-title>
        </div>

    </div>

    @endif



    <div class="grid grid-cols-5 gap-x-4 gap-y-10">
        @foreach($projects as $prj)
        <div class=" bg-white rounded-md shadow-lg h-104">
            <div class="
                        @if(Auth::user()->isAdmin())
                            @if($prj->publish_status == 2)
                                bg-red-700/90
                            @else
                                bg-orange-500/90
                            @endif
                        @else
                            @if($prj->publish_status == 2)
                                bg-green-700/90
                            @else
                                bg-red-700/90
                            @endif
                        @endif
                        mt-4 p-2 w-full  h-16 flex justify-center items-center">

                <x-sub-title class="font-semibold !text-white text-center">{{$prj->title}} <span class="text-white 
                        @if(Auth::user()->isAdmin())
                            @if($prj->publish_status == 2)
                                bg-red-700
                            @else
                                bg-orange-600
                            @endif
                        @else
                            @if($prj->publish_status == 2)
                                bg-green-600
                            @else
                                bg-red-700
                            @endif
                        @endif
                        px-2 rounded-md">({{$prj->abbreviation}})</span></x-sub-title>

            </div>
            <div class="p-4 flex w-full justify-center items-center flex-col">
                <div class="flex w-full px-4 flex-col justify-center items-center">
                    <div class="mx-2 w-12 h-12 rounded-full
                            @if(Auth::user()->isAdmin())
                                @if($prj->publish_status ==1)
                                    bg-orange-700
                                @else
                                    bg-red-800
                                @endif
                            @else
                                @if($prj->publish_status ==1)
                                    bg-red-800
                                @else
                                    bg-green-700
                                @endif
                            @endif
                            text-sm font-semibold uppercase flex items-center justify-center text-white">
                        @if($prj->head()->exists())
                        {{$this->getNameInitials($prj->head->first()->user->name)}}
                        @else
                        {{$this->getNameInitials("Not Assigned")}}
                        @endif
                    </div>
                    <div>
                        <div class="text-xs mt-2  uppercase font-semibold">
                            @if($prj->head()->exists())

                            {{$prj->head->first()->user->name}}
                            @else
                            Not Assigned
                            @endif
                        </div>
                        <div class="text-xs text-gray-500 text-center">Project Head</div>
                    </div>

                </div>

                <div class="text-sm text-stone-500 py-2 flex w-full items-start h-36 bg-stone-100 p-2 mt-2 rounded-md">

                    @if(Auth::user()->isAdmin())
                    @if($prj->publish_status ==1)
                    <!--Means project is just create and waiting for Project Head to complete the basic details  -->
                    <div class="flex items-center flex-col w-full">
                        <div class="flex px-2 relative bg-blue-300 w-full">
                            <div class="flex items-center flex-col absolute left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-green-300">
                                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                </div>
                                <div class="w-1 h-12  bg-gray-300"></div>
                            </div>
                            <div class="pl-3 text-xs font-semibold absolute left-5">
                                @if($prj->created_at)
                                Project created - <span class="text-stone-500">{{$prj->created_at->diffForHumans();}}</span>

                                @endif
                            </div>
                        </div>
                        <div class="flex px-2 relative bg-blue-300 w-full">
                            <div class="flex items-center flex-col absolute top-12 left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-gray-300">
                                    <div class="w-2 h-2 rounded-full bg-gray-500"></div>
                                </div>
                                <div class="w-1 h-12  bg-gray-300"></div>
                            </div>
                            <div class="pl-3 text-xs font-semibold lowercase absolute top-12 left-5">
                                waiting for project head to submit project details
                            </div>
                        </div>

                        <div class="flex px-2 relative bg-blue-300 w-full">
                            <div class="flex items-center flex-col absolute top-24 left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-gray-300">
                                    <div class="w-2 h-2 rounded-full bg-gray-500"></div>
                                </div>

                            </div>
                            <div class="pl-3 text-xs font-semibold lowercase absolute top-24 left-5">
                                Admin can approve/reject submitted project details
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="flex items-center flex-col w-full">
                        <div class="flex px-2 relative bg-blue-300 w-full">
                            <div class="flex items-center flex-col absolute left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-green-300">
                                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                </div>
                                <div class="w-1 h-12  bg-green-300"></div>
                            </div>
                            <div class="pl-3 text-xs font-semibold absolute left-5">
                                @if($prj->created_at)
                                Project created - <span class="text-stone-500">{{$prj->created_at->diffForHumans();}}</span>

                                @endif
                            </div>
                        </div>
                        <div class="flex px-2 relative w-full">
                            <div class="flex items-center flex-col absolute top-12 left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-green-300">
                                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                </div>
                                <div class="w-1 h-12  bg-gray-300"></div>
                            </div>
                            <div class="pl-3 text-xs font-semibold lowercase absolute top-12 left-5">
                                project head completed project details and submitted for publishing
                            </div>
                        </div>

                        <div class="flex px-2 relative w-full">
                            <div class="flex items-center flex-col absolute top-24 left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-gray-300">
                                    <div class="w-2 h-2 rounded-full bg-gray-500"></div>
                                </div>

                            </div>
                            <div class="pl-3 text-xs font-semibold lowercase absolute top-24 left-5">
                                waiting for admin to approve/reject submitted project details
                            </div>
                        </div>

                    </div>
                    @endif

                    @else
                    <!--Means project head has filled the basic details and sent project to admin for publishing-->
                    @if($prj->publish_status ==1)
                    <!--Means project is just create and waiting for Project Head to complete the basic details  -->
                    <div class="flex items-center flex-col w-full">
                        <div class="flex px-2 relative bg-blue-300 w-full">
                            <div class="flex items-center flex-col absolute left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-green-300">
                                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                </div>
                                <div class="w-1 h-12  bg-gray-300"></div>
                            </div>
                            <div class="pl-3 text-xs font-semibold absolute left-5">
                                @if($prj->created_at)
                                Project created - <span class="text-stone-500">{{$prj->created_at->diffForHumans();}}</span>

                                @endif
                            </div>
                        </div>
                        <div class="flex px-2 relative bg-blue-300 w-full">
                            <div class="flex items-center flex-col absolute top-12 left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-gray-300">
                                    <div class="w-2 h-2 rounded-full bg-gray-500"></div>
                                </div>
                                <div class="w-1 h-12  bg-gray-300"></div>
                            </div>
                            <div class="pl-3 text-xs font-semibold lowercase absolute top-12 left-5">
                                waiting for you to submit project details
                            </div>
                        </div>

                        <div class="flex px-2 relative bg-blue-300 w-full">
                            <div class="flex items-center flex-col absolute top-24 left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-gray-300">
                                    <div class="w-2 h-2 rounded-full bg-gray-500"></div>
                                </div>

                            </div>
                            <div class="pl-3 text-xs font-semibold lowercase absolute top-24 left-5">
                                Admin can approve/reject submitted project details
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="flex items-center flex-col w-full">
                        <div class="flex px-2 relative bg-blue-300 w-full">
                            <div class="flex items-center flex-col absolute left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-green-300">
                                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                </div>
                                <div class="w-1 h-12  bg-green-300"></div>
                            </div>
                            <div class="pl-3 text-xs font-semibold absolute left-5">
                                @if($prj->created_at)
                                Project created - <span class="text-stone-500">{{$prj->created_at->diffForHumans();}}</span>

                                @endif
                            </div>
                        </div>
                        <div class="flex px-2 relative w-full">
                            <div class="flex items-center flex-col absolute top-12 left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-green-300">
                                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                </div>
                                <div class="w-1 h-12  bg-gray-300"></div>
                            </div>
                            <div class="pl-3 text-xs font-semibold lowercase absolute top-12 left-5">
                                You have submitted the project details
                            </div>
                        </div>

                        <div class="flex px-2 relative w-full">
                            <div class="flex items-center flex-col absolute top-24 left-0">

                                <div class="w-4 h-4 rounded-full flex items-center justify-center bg-gray-300">
                                    <div class="w-2 h-2 rounded-full bg-gray-500"></div>
                                </div>

                            </div>
                            <div class="pl-3 text-xs font-semibold lowercase absolute top-24 left-5">
                                waiting for admin to approve/reject submitted project details
                            </div>
                        </div>

                    </div>
                    @endif



                    @endif
                </div>
                <div class="flex justify-center items-center py-2 pt-4 w-full">
                    @if(Auth::user()->isAdmin())
                    @if($prj->publish_status == 1)
                    <x-secondary-button wire:click="sendreminder({{$prj->id}})" class="!px-2 !py-2 !text-xs">Send Reminder</x-secondary-button>
                    @elseif($prj->publish_status ==2)
                    <x-success-button wire:click="openModal({{$prj}})" class="!px-2 !py-2 !text-xs mr-1">View Project Details</x-success-button>

                    @endif
                    @else
                    @if($prj->publish_status == 1)
                    <a href="/admin/edit/project/{{$prj->id}}">
                        <x-secondary-button class="!px-2 !py-2 !text-xs">Update & Submit Detail</x-secondary-button>
                    </a>
                    @elseif($prj->publish_status ==2)
                    <div class="flex flex-col justify-center items-center">
                        <x-success-button wire:click="openModal({{$prj}})" class="!px-2 !py-2 !text-xs mr-1">View Project Details</x-success-button>
                        <x-sub-title class="text-green-700 !text-xs mt-2 text-center">You have successfully submitted the details</x-sub-title>


                    </div>

                    @endif
                    @endif
                </div>

            </div>
        </div>
        @endforeach
    </div>
    <div class="flex justify-end py-8 ">
        {{$projects->links()}}
    </div>

    <x-jet-confirmation-modal wire:model="modalviewonly">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>



            </div>
        </x-slot>


        <x-slot name="title">
            Complete Project Details
        </x-slot>
        <x-slot name="subtitle">

            Detail of Project submitted for Approval

        </x-slot>
        <x-slot name="content">

            <div>

                

                <div class="w-full flex gap-x-5 bg-stone-100 rounded-md p-2 mb-2 border-dotted border-2
                         border-orange-600/40">
                    <div class="w-full">
                        <x-jet-label for="name" value="{{ __('Title') }}" />
                        <div class="pb-3  mb-2">
                            @if($modaldata->title!=null)
                            {{$modaldata->title}}
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
                            @if($modaldata->abbreviation!=null)
                            {{$modaldata->abbreviation}}
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
                            @if($modaldata->description!=null)
                            {{$modaldata->description}}
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
                            @if($modaldata->category!=null)
                            {{$modaldata->project_category->name}}
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
                            @if($modaldata->launched_by!=null)
                            {{$modaldata->launched_by}}
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
                            @if($modaldata->logo_image!=null)
                            <a href="assets/images/projects/{{$modaldata->logo_image}}" target="_blank">
                                <img class="h-16" src="assets/images/projects/{{$modaldata->logo_image}}" />
                            </a>
                            @else
                            NA
                            @endif
                        </div>
                    </div>
                </div>
                <div class="w-full flex gap-x-5 bg-stone-100 rounded-md p-2 mb-2 border-dotted border-2
                         border-orange-600/40">
                    <div class="w-full">
                        <x-jet-label for="name" value="{{ __('banner_image') }}" />
                        <div class="pb-3  mb-2">
                            @if($modaldata->banner_image!=null)
                            <a href="assets/images/projects/{{$modaldata->banner_image}}" target="_blank"><img class="h-16" src="assets/images/projects/{{$modaldata->banner_image}}" />
                            </a>
                            @else
                            NA
                            @endif
                        </div>
                    </div>
                </div>
                <div class="w-full flex gap-x-5 ">
                    <div class="w-full">

                        <div class="pb-2  mb-2">



                            @foreach ($modaldata->featurebox as $fb)
                            <div class="bg-stone-100 rounded-md p-2 mb-2  border-dotted border-2
                         border-orange-600/40 ">
                                <div class="py-2">

                                    <x-main-title>
                                        {{$fb->title}}
                                    </x-main-title>
                                    <x-sub-title>
                                        {{$fb->subtitle}}
                                    </x-sub-title>
                                </div>

                                <div class="ml-6">
                                    @if($fb->icon =="manual")
                                    <div class="">
                                        @foreach ($modaldata->manuals as $man)
                                        <div class="border-b border-dashed border-stone-400 py-2 mb-3">
                                            <a href="/storage/{{$man->has_document_manual}}" target="_blank" class="hover:text-red-600">

                                                <div class="flex"><svg class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56 56" xml:space="preserve" fill="#000000">
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
                                                    <div class="ml-3">
                                                        {{$man->title}}({{$man->version}})
                                                    </div>
                                                </div>


                                            </a>


                                        </div>

                                        @endforeach
                                    </div>
                                    @else
                                    <ul class="list-disc">
                                        @foreach ($fb->featureboxentries as $fbe)
                                        <li>
                                            <div class="">
                                                {{$fbe->title}}
                                                {{$fbe->description}}
                                            </div>
                                        </li>

                                        @endforeach
                                    </ul>

                                    @endif
                                </div>
                            </div>



                            @endforeach
                        </div>
                    </div>
                </div>
                @if(Auth::user()->isAdmin())
                <div>
                    {{-- <x-sub-title class="text-gray-800 font-semibold">Publish or Send back</x-sub-title> --}}
                    <div class="bg-stone-300 rounded-md p-4 text-xs ">

                        @if(count($modaldata->getremarks)==0)
                        <div class="flex justify-center items-center">
                            No Previous Remarks Available !
                        </div>
                        @else
                            @foreach ($modaldata->getremarks as $rem)
                                <div class="p-2 rounded bg-stone-100 mb-2 flex items-start justify-between">
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
                        <x-jet-validation-errors class="mb-4" />
                        <div class="mt-6 border-t border-dashed border-stone-500">
                            <x-jet-label for="cap" value="{{ __('Remarks') }}" />
                            <textarea maxlength=8000 placeholder="Enter Remarks (Maximum 8000 Characters)" required wire:model="comments.remarks" rows="4" class="mt-1 block p-2.5 w-full text-sm text-gray-900  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>


                            <x-jet-input-error for="cap" class="mt-2" />
                        </div>
                        
                        <div class="flex justify-end items-end mt-2">
                            <x-success-button class="mr-2" wire:click="openpublishmodal()">Publish Project</x-success-button>
                            <x-danger-button wire:click="opensendbackmodal()">Send Back</x-danger-button>


                        </div>

                    </div>

                </div>

                @else
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
                @endif






            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="openModal('')" wire:loading.attr="disabled">
                Close
            </x-secondary-button>

            {{-- <x-primary-button class="ml-2" wire:click="saveFeatureBoxEntries()" wire:loading.attr="disabled">
                Save
            </x-primary-button> --}}
        </x-slot>
    </x-jet-confirmation-modal>



    <x-jet-confirmation-modal wire:model="openpublishmodal">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-gray-900" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
            </div>
        </x-slot>
        <x-slot name="title">
            Confirm Project Publication

        </x-slot>

        <x-slot name="subtitle">
            This action will publish the project to public
        </x-slot>

        <x-slot name="content" class="bg-stone-100">

                    


                <div class="flex justify-center items-center">
                    <h1 class="font-semibold text-md text-gray-800 mt-4"> All the details related to this project will be visible to public.</h1>
                </div>



                <div class="bg-orange-600/10 rounded-md border border-orange-200 p-4 mt-3 flex flex-col justify-center items-center h-60">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-12 h-12 stroke-orange-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>


                    <span class="text-orange-600 text-2xl"> Are you sure you want to publish this project?</span>
                    <span class="text-stone-900 text-2xl"> TEST PROJECT MANAGEMENT SYSTEM</span>
                    <div class="flex mt-6">
                        <x-jet-secondary-button wire:click="togglepublishmodal" wire:loading.attr="disabled">
                            Cancel
                        </x-jet-secondary-button>

                        <x-success-button class="ml-2" wire:click="publishproject()" wire:loading.attr="disabled">
                            Publish
                        </x-success-button>

                    </div>




                </div>
        </x-slot>

        <x-slot name="footer" class="bg-white">

        </x-slot>
    </x-jet-confirmation-modal>

     <x-jet-confirmation-modal wire:model="opensendbackmodal">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-gray-900" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
            </div>
        </x-slot>
        <x-slot name="title">
            Send back for Correction 

        </x-slot>

        <x-slot name="subtitle">
            This action will send back this project to project head
        </x-slot>

        <x-slot name="content" class="bg-stone-100">

                 
                <div class="bg-red-600/10 rounded-md border border-red-200 p-4 mt-3 flex flex-col justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-12 h-12 stroke-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>


                    <span class="text-red-600 text-2xl"> Are you sure you want to send back project </span>
                    <span class="text-stone-900 text-2xl"> TEST PROJECT MANAGEMENT SYSTEM</span>
                    <span class="text-stone-900 text-md"> with following remarks</span>
                    <span class="text-stone-900 text-2xl"> {{$comments['remarks']}}</span>
                    <div class="flex mt-6">
                        <x-jet-secondary-button wire:click="togglesendbackmodal()" wire:loading.attr="disabled">
                            Cancel
                        </x-jet-secondary-button>

                        <x-success-button class="ml-2" wire:click="sendback()" wire:loading.attr="disabled">
                            Send Back
                        </x-success-button>

                    </div>




                </div>
        </x-slot>

        <x-slot name="footer" class="bg-white">

        </x-slot>
    </x-jet-confirmation-modal>




</div>
