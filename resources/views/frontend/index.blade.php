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
            <div class="bg-gray-800 w-full flex justify-center">
                <div class="w-8/12 text-center grid grid-cols-4 gap-2">



                    <div class="p-4 pl-0">
                        <div class="  p-2 ">
                            <div class="text-4xl text-white font-bold mt-2">1,234</div>
                            <div class="text-xl text-pink-200 font-semibold">Published Projects</div>

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="  p-2">
                            <div class="text-4xl text-white font-bold mt-2">1,234</div>
                            <div class="text-xl text-pink-200 font-semibold">Registered Groups</div>
                        </div>
                    </div>

                    <div class="p-4">
                        <div class="  p-2">
                            <div class="text-4xl text-white font-bold mt-2">10,000</div>
                            <div class="text-xl text-pink-200 font-semibold">Project Categories</div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="p-2">
                            <div class="text-4xl text-white font-bold mt-2">10,000</div>
                            <div class="text-xl text-pink-200 font-semibold">Project Manuals</div>
                        </div>
                    </div>

                    <!-- Add more stat cards here -->


                </div>

            </div>

            <div class="w-full flex justify-center">

                <div class="w-8/12 text-center">

                    <div class="p-6 mt-4 text-xl text-pink-800 font-inter font-semibold"> - About PMR -

                        <h1 class="text-2xl text-stone-800">Centralize, Organize and Empower your Projects </h1>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4">
                            <img src="./assets/images/project.jpg" />
                        </div>
                        <div class="p-4">
                            <ul class="list-disc text-justify ">
                                <li class="mb-3"><strong>Comprehensive Search:</strong> A robust search functionality that allows users to quickly find specific project manuals and descriptions based on keywords, tags, or categories.</li>
                                <li class="mb-3"><strong>User-Friendly Interface:</strong> An intuitive and user-friendly interface that makes it easy to navigate through the repository, browse different project categories, and access relevant manuals.</li>
                                <li class="mb-3"><strong>Document Management:</strong> Efficient document management capabilities that enable users to upload, store, and organize project manuals and related files in a structured manner.</li>
                                <li class="mb-3"><strong>Rating and Review System:</strong> A rating and review system that allows users to rate and provide feedback on the usefulness and quality of project manuals, helping others make informed decisions.</li>
                                {{-- <li class="mb-3"><strong> Mobile Accessibility:</strong> Mobile-friendly design and compatibility, allowing users to access project manuals and descriptions on the go using their smartphones or tablets.</li>
                                <li class="mb-3"><strong> Analytics and Insights:</strong> Analytics and reporting capabilities that provide insights into the usage, popularity, and effectiveness of project manuals, helping administrators and contributors understand the impact of their content.</li> --}}



                            </ul>
                            <div class="text-left mt-8">
                                <x-primary-button>Know More</x-primary-button>
                            </div>
                        </div>


                    </div>
                    <!-- Add more stat cards here -->


                </div>

            </div>
            <div class="w-full bg-stone-100 flex justify-center">
                <div class="w-8/12 text-center p-6">

                    <div class="p-6 mt-4 text-xl font-inter font-semibold">


                        <h1 class="text-2xl text-stone-800">
                            Realtime Project Statistics </h1>
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        <div class="h-24 bg-stone-200 rounded-lg flex justify-center items-center">1000</div>
                        <div class="h-24 bg-stone-200 rounded-lg flex justify-center items-center">1000</div>
                        <div class="h-24 bg-stone-200 rounded-lg flex justify-center items-center">1000</div>
                        <div class="h-24 bg-stone-200 rounded-lg flex justify-center items-center">1000</div>
                        <div class="h-24 bg-stone-200 rounded-lg flex justify-center items-center">1000</div>
                        <div class="h-24 bg-stone-200 rounded-lg flex justify-center items-center">1000</div>
                    </div>

                </div>
            </div>




            {{-- @livewire('searchprojects') --}}




        </div>


    </div>

</x-front-layout>
