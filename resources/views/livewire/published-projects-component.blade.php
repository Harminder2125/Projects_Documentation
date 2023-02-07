<div>
    <p>These projects have been approved by you (Admin) and are visible on the portal. </p>
    <div class="grid md:grid-cols-4 sm:grid-cols-3 xs:grid-cols-1 grid-flow-row gap-x-4 gap-y-16 mt-5">
        @foreach($projects as $project)
        <div class="border-0 border-emerald-300 bg-gray-100 rounded-lg flex flex-col flex-center shadow-lg">
            <div class="overflow-hidden h-32 rounded-t-lg relative">
                <span class="absolute top-0 right-0 px-2 pb-0.5 text-xs  font-semibold text-gray-600 mt-4 mr-4 bg-purple-200 rounded-lg">Category</span>
                <img src="./assets/images/projects/banner7.jpg" class="w-full h-32 object-cover" />
            </div>
            <div class="-mt-10 flex justify-center overflow-hidden z-10">

                @if($project->logo_image)
                <img src="./assets/images/projects/{{$project->logo_image}}" class="border-4 border-white flex justify-center items-center w-20 h-20 rounded-full shadow-sm object-cover" />
                @else
                <span class="bg-fuchsia-900 text-white border-4 border-white flex justify-center items-center w-20 h-20 rounded-full shadow-sm object-cover">
                    {{$project->abbreviation}}
                </span>
                @endif


            </div>
            <div class="py-1 ">
                <h1 class="font-semibold uppercase text-sm text-gray-800 text-center h-8">{{$project->title}}</h1>
                <div class="flex justify-center mt-3 flex-col items-center text-xs text-gray-500">

                    <h1 class="font-semibold uppercase text-xs text-gray-700 text-center">
                        Handled by
                    </h1>
                    <span class="mb-3"> {{$project->division->name}} ({{$project->division->group->name}})</span>
                    <h1 class="font-semibold uppercase text-xs text-gray-700 text-center">
                        HOD Name
                    </h1>
                    <span class="mb-3">{{$project->division->hod->name}}</span>

                    <h1 class="font-semibold uppercase text-xs text-gray-700 text-center">
                        Completion Status
                    </h1>

                    <div class="w-full px-8">
                        <div class="w-full h-4 pt-1">
                            <div class="overflow-hidden h-4 mb-4 text-xs flex rounded bg-rose-200">
                                <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-fuchsia-900 via-pink-800 to-red-700">80%</div>

                            </div>
                        </div>
                    </div>


                </div>







                <div class="mt-4 mb-2">
                    <div class="flex justify-center text-sm  w-full p-3 ">
                        <a href="/project/{{$project->id}}" class="text-rose-800 hover:text-fuchsia-800">More details</a>
                    </div>

                </div>


            </div>

        </div>
        @endforeach
    </div>
</div>
