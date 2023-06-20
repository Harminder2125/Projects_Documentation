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
                    <x-success-button class="!px-2 !py-2 !text-xs mr-1">View Project Details</x-success-button>
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



</div>
