<div>
    <div class="w-full xs:px-2">


        <div class=" flex flex-row flex-wrap justify-ceter items-center ">

            <div class="w-full bg-white rounded-t-lg flex flex-col justify-between">


                @foreach ($newnotifications as $nn)

                <div class="p-3 bg-stone-100 mb-2 w-full flex flex-col">
                    <div> {{ $nn->Events->payload }}</div>
                    @if ($nn->Events->created_at)
                    <div class="text-right text-sm  text-stone-500"> {{ $nn->Events->created_at->diffForHumans() }}</div>
                    @endif
                </div>
                @endforeach





            </div>






        </div>
    </div>

</div>
