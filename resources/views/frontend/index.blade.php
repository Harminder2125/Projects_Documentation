<x-front-layout>
    <div class="flex flex-col bg-gradient-to-b from-zinc-100 to-white w-full items-center">


        <div class="w-full flex md:py-10">
            <div class="w-2/12"><span></span></div>
            <div class="w-3/12 flex flex-col justify-center">

                <p class="text-4xl !leading-tight font-black  text-stone-800">One-stop destination for project manuals and descriptions</p>

                <p class="text-lg mt-8 text-stone-600 text-justify">our repository is designed to empower you with the insights necessary to excel in your projects. Say goodbye to searching through countless resources we've gathered everything you need in one convenient place</p>

                <button class="bg-pink-800 hover:bg-fuchsia-900 text-white font-bold py-3 px-4 rounded mt-14">
                    Explore Projects
                </button>

            </div>
            <div class="w-5/12 py-1 px-20 pb-10 pt-20 justify-self-end"><img src="./assets/images/illustration5.png" /></div>




        </div>
        <div class="w-full items-center flex flex-col border-t-0  border-zinc-300 border-dashed">
            <div class="bg-orange-900/10 w-full flex justify-center">
                <div class="w-8/12 text-center grid grid-cols-4 gap-2">



                    <div class="p-4 pl-0">
                        <div class=" group p-2  hover:rounded-lg hover:cursor-pointer hover:bg-orange-900/20">

                            <div class="text-3xl text-stone-800 font-bold mt-2 group-hover:animate-bounce">{{$published}}</div>



                            <div class="text-md text-stone-800 font-semibold ">Published Projects</div>
                            <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-10 h-10 stroke-lime-700 group-hover:animate-[spin_3s_ease-in-out_infinite]">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                </svg>







                            </div>

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="p-2 group hover:rounded-lg hover:cursor-pointer hover:bg-orange-900/20">

                            <div class="text-3xl text-stone-800 font-bold mt-2 group-hover:animate-bounce">{{$unpublished}}</div>


                            <div class="text-md text-stone-800 font-semibold">Projects under progress</div>
                            <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-10 h-10 stroke-orange-800 group-hover:animate-[spin_3s_ease-in-out_infinite]">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                </svg>










                            </div>


                        </div>
                    </div>

                    <div class="p-4">
                        <div class="p-2 group hover:rounded-lg hover:cursor-pointer hover:bg-orange-900/20">

                            <div class="text-3xl text-stone-800 font-bold mt-2 group-hover:animate-bounce">{{$categories}}</div>


                            <div class="text-md text-stone-800  font-semibold">Project Categories</div>
                            <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-10 h-10 stroke-sky-900 group-hover:animate-[spin_3s_ease-in-out_infinite]">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                                </svg>

                            </div>



                        </div>
                    </div>
                    <div class="p-4">
                        <div class="p-2 group hover:rounded-lg hover:cursor-pointer hover:bg-orange-900/20">
                            <div class="text-3xl text-stone-800 font-bold mt-2 group-hover:animate-bounce">{{$manuals}}</div>


                            <div class="text-md text-stone-800  font-semibold">Project Manuals</div>
                            <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-10 h-10 stroke-fuchsia-800 group-hover:animate-[spin_3s_ease-in-out_infinite]">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                                </svg>


                            </div>


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
                        <div class="h-24 bg-stone-200 rounded-lg flex justify-center items-center flex-col">
                            <h1 class="text-2xl">{{$groups}}</h1>

                            <h2 class="font-semibold">Groups/States Registered</h2>
                        </div>
                        <div class="h-24 bg-stone-200 rounded-lg flex justify-center items-center flex-col">
                            <h1 class="text-2xl">{{$groups}}</h1>

                            <h2 class="font-semibold">Users Registered</h2>
                        </div>

                        <div class="h-24 bg-stone-200 rounded-lg flex justify-center items-center flex-col">
                            <h1 class="text-2xl">{{$groups}}</h1>

                            <h2 class="font-semibold">Users Registered</h2>
                        </div>


                    </div>

                </div>
            </div>




            {{-- @livewire('searchprojects') --}}




        </div>


    </div>

</x-front-layout>
