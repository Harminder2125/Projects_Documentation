<div>
    <div class="w-full xs:px-2">


        <div class=" flex flex-row flex-wrap justify-ceter items-top">

            <div class="w-full bg-white rounded-md flex flex-col justify-between p-3">

               
               
                @foreach ($newnotifications as $nn)

                <div class="p-3 bg-stone-100 rounded mb-2 w-full flex flex-col">
                    <div wire:click="onseen({{ $nn->id }})" class="cursor-pointer {{$nn->seen==0?" font-bold text-purple-700":""}}" > {{ $nn->Events->payload }}</div>
                    
                   
                    @if ($nn->Events->created_at)
                    <div class="text-right text-sm "> {{ $nn->Events->created_at->diffForHumans() }}</div>
                    @endif
                </div>
                @endforeach
               





            </div>






        </div>
    </div>

</div>
