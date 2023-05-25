<x-front-layout>
    <div class="flex flex-col bg-gradient-to-b from-zinc-100 to-white w-full items-center">


        <div class="w-full flex md:py-10">
            <div class="w-2/12"><span></span></div>
            <div class="w-3/12 flex flex-col justify-center">

                <p class="text-4xl !leading-tight font-black font-inter text-zinc-800">One-stop destination for project manuals and descriptions</p>

                <p class="text-lg mt-8 text-zinc-600 text-justify">our repository is designed to empower you with the insights necessary to excel in your projects. Say goodbye to searching through countless resources we've gathered everything you need in one convenient place</p>

                <button class="bg-pink-800 hover:bg-fuchsia-900 text-white font-bold py-3 px-4 rounded mt-14">
                    Explore Projects
                </button>

            </div>
            <div class="w-5/12 py-1 px-20 pb-10 pt-20 justify-self-end"><img src="./assets/images/illustration5.png" /></div>




        </div>
        <div class="w-full items-center flex flex-col border-t-0  border-zinc-300 border-dashed">
            <div class="bg-stone-200 w-full h-24 flex justify-center">
                <div class="w-8/12 flex items-center">

                    <div class="grid grid-cols-3">
                        <div class="flex justify-center items-center">
                            <h1 class="text-stone-700 text-2xl font-inter font-semibold">Projects Published</h1>

                            <h1 class="text-stone-700 text-2xl font-inter font-semibold">Projects Published</h1>
                        </div>
                    </div>
                </div>

            </div>



            {{-- @livewire('searchprojects') --}}




        </div>


    </div>

</x-front-layout>
