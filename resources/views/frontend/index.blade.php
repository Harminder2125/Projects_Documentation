<x-front-layout>
    <div class="flex flex-col bg-gradient-to-b from-zinc-100 to-white w-full items-center">


        <div class="w-full flex md:py-10">
            <div class="w-2/12"><span></span></div>
            <div class="w-3/12 flex flex-col justify-center">

                <h1 class="text-6xl md:text-4xl font-black font-inter text-zinc-800 ">Resolve your issues, even faster</h1>
                <p class="text-lg mt-8 text-zinc-600">Complete repository of manuals, video tutorials, demo instances, demo credentials and incremental updates of all the projects developed by NIC Punjab</p>
                <button class="bg-pink-800 hover:bg-fuchsia-900 text-white font-bold py-3 px-4 rounded mt-14">
                    Navigate to Projects
                </button>

            </div>
            <div class="w-5/12 py-1 px-20 pb-10 pt-20 justify-self-end"><img src="./assets/images/illustration5.png" /></div>




        </div>
        <div class="w-full items-center flex flex-col border-t-0  border-zinc-300 border-dashed>
            {{-- <div class="w-8/12 flex items-center">

                <h1 class="uppercase text-zinc-800 font-bold font-inter mr-2 text-lg">New Updates</h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
                </svg>
            </div> --}}


            @livewire('searchprojects')




        </div>

    </div>

</x-front-layout>
