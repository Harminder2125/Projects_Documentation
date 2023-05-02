<div>
    <div class="w-full  px-10 xs:px-2">


        <div class=" flex flex-row flex-wrap justify-ceter items-center p-3">

            <div class="pb-1 mb-5 flex-1 bg-gradient-to-l from-pink-500/80 via-pink-700/80 to-pink-900/80 h-24 rounded-t-xl">

                <div class="p-3 h-full bg-white rounded-t-lg flex flex-col justify-between">

                    <h1>Notifications</h1>
                    <ul>
                        @foreach ($newnotifications as $nn)
                      
                            <li class="p-3">{{ $nn->Events->payload }}</li>
                        @endforeach
                       </ul>

                </div>

                
            </div>

            
            
            
            
        </div>
    </div>

</div>
