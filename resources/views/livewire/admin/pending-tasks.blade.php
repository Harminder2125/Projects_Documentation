<div>
    <div class="grid grid-cols-5 gap-x-4 gap-y-10">
        @foreach($projects as $prj)
        <div class=" bg-white rounded-md shadow-lg">
            <div class="bg-yellow-600/90 mt-4 p-2 w-full  h-16 flex justify-center items-center">

                <x-sub-title class="font-semibold !text-white text-center">{{$prj->title}}</x-sub-title>
            </div>
            <div class="p-4 flex w-full justify-center items-center flex-col">

                <div class="flex w-full px-4 flex-col justify-center items-center">
                    <div class="mx-2 w-12 h-12 rounded-full bg-red-800 text-sm font-semibold uppercase flex items-center justify-center text-white">
                        {{$this->getNameInitials("Harminder Singh")}}
                    </div>
                    <div>
                        <div class="text-xs mt-2  uppercase font-semibold">
                            Harminder Singh

                        </div>
                        <div class="text-xs text-gray-500 text-center">Project Head</div>
                    </div>

                </div>

                Project created - 10 days ago
            </div>
        </div>
        @endforeach
    </div>
    <div class="flex justify-end py-8 ">
        {{$projects->links()}}
    </div>
</div>
