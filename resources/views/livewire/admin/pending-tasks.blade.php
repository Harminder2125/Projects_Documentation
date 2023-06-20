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
                {{-- <div class="text-sm">
                                    @if($prj->created_at)
                                    Project created - <span class="text-stone-500">{{$prj->created_at->diffForHumans();}}</span>

                @endif
            </div> --}}
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
                <x-secondary-button class="!px-2 !py-2 !text-xs">Send Reminder</x-secondary-button>
                @elseif($prj->publish_status ==2)
                <x-success-button class="!px-2 !py-2 !text-xs mr-1">View Project Details</x-success-button>
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
        Detail of Project submitted to Admin for Approval

    </x-slot>
    <x-slot name="content">

        <div>

            <x-jet-validation-errors class="mb-4" />

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
                            </div>
                        </div>



                        @endforeach
                    </div>
                </div>
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
        <x-secondary-button wire:click="openModal('')" wire:loading.attr="disabled">
            Close
        </x-secondary-button>

        {{-- <x-primary-button class="ml-2" wire:click="saveFeatureBoxEntries()" wire:loading.attr="disabled">
                Save
            </x-primary-button> --}}
    </x-slot>
</x-jet-confirmation-modal>



</div>
