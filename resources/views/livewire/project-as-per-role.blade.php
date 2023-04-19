 <div class="mt-4">
     {{-- <div class="bg-white rounded-lg shadow-md p-3 mb-2">
            <h2 class="text-lg font-semibold mb-4">As Admin </h2>
            <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel tellus ut felis posuere commodo nec ut nulla. Nullam feugiat bibendum massa, id semper elit faucibus et. Donec bibendum auctor lacus a efficitur. Fusce iaculis, turpis eu convallis faucibus, est felis suscipit lorem, et commodo arcu metus ac nisl. Fusce dictum, quam eu ullamcorper bibendum, eros ipsum vestibulum magna, id posuere ipsum lorem sed ex.</p>
        </div> --}}




     @if( count($team_head)>0 )
     <div class="bg-white rounded-lg shadow-md p-3 mb-2">
         <h2 class="text-lg font-semibold mb-4">As Project Head</h2>
         <p class="text-gray-500">
             <div class="grid grid-cols-4 gap-4 ">
                 @foreach ($team_head as $p)
                  <a href="/admin/project/{{$p->project->id}}">
                 <div class="p-2 sm:w-1/2 w-full">
                     <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                         <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-pink-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                             <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                             <path d="M22 4L12 14.01l-3-3"></path>
                         </svg>
                         <span class="title-font font-medium">{{$p->project->title}}</span>
                     </div>
                 </div>
                 </a>
                 @endforeach
             </div>
         </p>
     </div>



     @endif


     @if(count($team_leader)>0)

     <div class="bg-white rounded-lg shadow-md p-3 mb-2">
         <h2 class="text-lg font-semibold mb-4">As Project Leader</h2>
         <p class="text-gray-500">
             <div class="grid grid-cols-4 gap-4 ">
                 @foreach ($team_leader as $p)
                 <a href="/admin/project/{{$p->project->id}}">
                 <div class="p-2 sm:w-1/2 w-full">
                     <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                         <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-pink-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                             <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                             <path d="M22 4L12 14.01l-3-3"></path>
                         </svg>
                         <span class="title-font font-medium">{{$p->project->title}}</span>
                     </div>
                 </div>
                 </a>
                 @endforeach
             </div>
         </p>
     </div>

     @endif

     @if(count($team_member)>0)

     <div class="bg-white rounded-lg shadow-md p-3 mb-2">
         <h2 class="text-lg font-semibold mb-4">As Project Member</h2>
         <p class="text-gray-500">
             <div class="grid grid-cols-3 gap-4 ">
                 @foreach ($team_member as $p)
                 {{-- {{$p->project}} --}}
                 <div class="relative">
                     <div class="bg-gray-50  rounded-lg flex flex-col justify-between border-2 border-dashed  border-gray-200 mb-1">
                         <div class="flex flex  bg-gray-200 p-3 justify-center items-center">

                             @if($p->project->logo_image)
                             <div class="w-1/4 flex justify-center items-center">
                                 <img src="../assets/images/projects/{{$p->project->logo_image}}" class="w-24 h-24 rounded-full" />
                             </div>
                             @else
                             <div class="w-1/4 flex justify-center items-center">
                                 <div class="w-24 h-24 rounded-full bg-gray-400 flex justify-center items-center text-white uppercase">
                                     {{$p->project->abbreviation}}
                                 </div>

                             </div>
                             @endif

                             <div class="w-3/4 p-6">
                                 {{-- <div class="flex items-baseline rounded-full">
                            <span class="rounded-full bg-pink-800 text-white px-2 py-1 text-sm">{{$project->group->name}}</span>
                             </div> --}}
                             <h4 class="mt-2 text-sm leading-normal font-semibold uppercase leading-tight ">{{$p->project->title}}</h4>
                             <h5 class="mt-2 text-sm leading-normal  uppercase leading-tight ">{{$p->project->abbreviation}}</h5>
                         </div>
                     </div>
                     <div class="mt-1 p-4">
                         <div>
                             {{$p->project->description}}
                         </div>
                         {{-- <div class="mt-0 flex text-ellipsis overflow-hidden text-justify">

                    <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                        Alias

                    </span>
                    <span class="w-3/5 px-2 border-b border-dashed border-gray-200">
                        {{$p->project->abbreviation}}
                         </span>
                     </div>
                     <div class="mt-2 flex text-ellipsis overflow-hidden text-justify">

                         <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                             Project Head

                         </span>
                         <span class="w-3/5 px-2 border-b border-dashed border-gray-200">
                             Mr. Anoop Kumar Jalali
                         </span>
                     </div>
                     <div class="mt-2 flex text-ellipsis overflow-hidden text-justify">

                         <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                             Launch Date

                         </span>
                         <span class="w-3/5 px-2 border-b border-dashed border-gray-200">
                             25-April-2018
                         </span>
                     </div>
                     <div class="mt-2 flex text-ellipsis overflow-hidden text-justify">

                         <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                             Contact No.

                         </span>
                         <span class="w-3/5 flex px-2 border-b border-dashed border-gray-200">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                             </svg>
                             9888983051

                         </span>
                     </div>
                     <div class="mt-2 flex text-ellipsis overflow-hidden text-justify">

                         <span class="justify-start w-2/5 font-semibold bg-gray-200 px-2">
                             Contact Email

                         </span>
                         <span class="w-3/5 flex px-2 border-b border-dashed border-gray-200">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                             </svg>

                             harminder.singh90@nic.in

                         </span>
                     </div> --}}





                     <div class="mt-2">
                         <p class="flex break-words justify-end text-pink-800 ">

                             <a href="" class="">View Manual</a>
                         </p>
                     </div>
                 </div>
             </div>
     </div>
     @endforeach
 </div>
 </p>
 </div>
 @endif





 </div>
