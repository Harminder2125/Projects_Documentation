<div>
    <div class="grid grid-cols-5 gap-x-4 gap-y-10">
        @foreach($projects as $prj)
        <div class=" bg-white rounded-md shadow-lg">
            <div class="bg-orange-500/90 mt-4 p-2 w-full  h-16 flex justify-center items-center">

                <x-sub-title class="font-semibold !text-white text-center">{{$prj->title}} <span class="text-white bg-orange-600 px-2 rounded-md">({{$prj->abbreviation}})</span></x-sub-title>

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
                <div class="text-sm">
                    @if($prj->created_at)
                    Project created - <span class="text-stone-500">{{$prj->created_at->diffForHumans();}}</span>

                    @endif
                </div>
                <div class="text-sm text-stone-500">
                    @if($prj->publish_status ==1)
                    <!--Means project is just create and waiting for Project Head to complete the basic details  -->
                    <div class="flex items-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center bg-gray-300">
                            <div class="w-4 h-4 rounded-full bg-green-500"></div>
                        </div>
                        <div class="w-24 h-1 bg-gray-300"></div>
                        <div class="w-16 h-16 rounded-full flex items-center justify-center bg-gray-300">
                            <div class="w-4 h-4 rounded-full bg-green-500"></div>
                        </div>
                        <div class="w-24 h-1 bg-gray-300"></div>
                        <div class="w-16 h-16 rounded-full flex items-center justify-center bg-gray-300">
                            <div class="w-4 h-4 rounded-full bg-green-500"></div>
                        </div>
                        <div class="w-24 h-1 bg-gray-300"></div>
                        <div class="w-16 h-16 rounded-full flex items-center justify-center bg-gray-300">
                            <div class="w-4 h-4 rounded-full"></div>
                        </div>
                    </div>



                    @elseif($prj->publish_status == 2)
                    <!--Means project head has filled the basic details and sent project to admin for publishing-->

                    @else

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
