 <div class="mt-4">
     {{-- <div class="bg-white rounded-lg shadow-md p-3 mb-2">
            <h2 class="text-lg font-semibold mb-4">As Admin </h2>
            <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel tellus ut felis posuere commodo nec ut nulla. Nullam feugiat bibendum massa, id semper elit faucibus et. Donec bibendum auctor lacus a efficitur. Fusce iaculis, turpis eu convallis faucibus, est felis suscipit lorem, et commodo arcu metus ac nisl. Fusce dictum, quam eu ullamcorper bibendum, eros ipsum vestibulum magna, id posuere ipsum lorem sed ex.</p>
        </div> --}}



    


     @if( count($team_role)>0 )
     <div class="bg-white rounded-lg shadow-md p-3 mb-2">
         <h2 class="text-lg font-semibold mb-4">
             @if($role==1)
             As Project Head
             @endif
             @if($role==2)
             As Team Leader
             @endif
             @if($role==3)
             As Team Member
             @endif


         </h2>
         <p class="text-gray-500">
             <div class="grid grid-cols-4 gap-4 ">
                 @foreach ($team_role as $p)
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

    @else
        <div class="bg-red-100 p-2 rounded">You have not assigned this role</div>
    @endif

    









 </div>
