<div>
    <div class="grid grid-cols-5 gap-x-4 gap-y-10">
        @foreach($projects as $prj)
        <div class=" bg-white rounded-md shadow-lg h-96">
            <div class="
            @if($prj->publish_status == 2)
     bg-red-500/90
            @else
            bg-orange-500/90
            @endif
             mt-4 p-2 w-full  h-16 flex justify-center items-center">

                <x-sub-title class="font-semibold !text-white text-center">{{$prj->title}} <span class="text-white
               
                  @if($prj->publish_status == 2)
     bg-red-600 
            @else
           bg-orange-600 
            @endif
                 
                 px-2 rounded-md">({{$prj->abbreviation}})</span></x-sub-title>

            </div>
            <div class="p-4 flex w-full justify-center items-center flex-col">

                <div class="flex w-full px-4 flex-col justify-center items-center">
                    <div class="mx-2 w-12 h-12 rounded-full bg-red-800 text-sm font-semibold uppercase flex items-center justify-center text-white">

                        @if($prj->head()->exists())



                        {{$this->getNameInitials($prj->head->user->name)}}
                        @else
                        {{$this->getNameInitials("Not Assigned")}}

                        @endif
                    </div>
                    <div>
                        <div class="text-xs mt-2  uppercase font-semibold">
                            @if($prj->head()->exists())

                            {{$prj->head->user->name}}
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
            <div class="text-sm text-stone-500 py-2 flex w-full items-start">
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



                @elseif($prj->publish_status == 2)
                <!--Means project head has filled the basic details and sent project to admin for publishing-->
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
                    <div class="flex px-2 relative bg-blue-300 w-full">
                        <div class="flex items-center flex-col absolute top-12 left-0">

                            <div class="w-4 h-4 rounded-full flex items-center justify-center bg-green-300">
                                <div class="w-2 h-2 rounded-full bg-gray-500"></div>
                            </div>
                            <div class="w-1 h-12  bg-gray-300"></div>
                        </div>
                        <div class="pl-3 text-xs font-semibold lowercase absolute top-12 left-5">
                            project head completed project details and submitted for publishing
                        </div>
                    </div>

                    <div class="flex px-2 relative bg-blue-300 w-full">
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
                    <div class="flex px-2 relative bg-blue-300 w-full">
                        <div class="flex items-center flex-col absolute top-12 left-0">

                            <div class="w-4 h-4 rounded-full flex items-center justify-center bg-green-300">
                                <div class="w-2 h-2 rounded-full bg-gray-500"></div>
                            </div>
                            <div class="w-1 h-12  bg-green-300"></div>
                        </div>
                        <div class="pl-3 text-xs font-semibold lowercase absolute top-12 left-5">
                            project head to submit project details
                        </div>
                    </div>

                    <div class="flex px-2 relative bg-blue-300 w-full">
                        <div class="flex items-center flex-col absolute top-24 left-0">

                            <div class="w-4 h-4 rounded-full flex items-center justify-center bg-green-300">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                            </div>
                            
                        </div>
                        <div class="pl-3 text-xs font-semibold lowercase absolute top-24 left-5">
                             Project Published Successfully
                        </div>
                    </div>
                   


                   


                </div> 

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
