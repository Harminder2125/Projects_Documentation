<div>
    <script src="/assets/js/lottieplayer.js"></script>

    <div class="flex">
        <div class="flex flex-col bg-white  w-9/12 pr-4">

            <div class="pr-4 text-justify tracking-widest  text-gray-600 text-regular leading-relaxed">
                {{$project['description']}}
            </div>
            <div class="my-4 mt-8">
                <x-main-title>Project Team</x-main-title>
            </div>

            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">


                <div class="grid gap-x-2 grid-cols-4 gap-y-4">
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-2 w-20 h-20 rounded-full bg-fuchsia-900 text-sm font-semibold uppercase flex items-center justify-center text-white">
                            {{$this->getNameInitials($project->division->hod->name)}}
                        </div>

                        <div class="text-xs mt-2 text-center uppercase font-semibold">
                            {{$project->division->hod->name}}

                        </div>
                        <div class="text-xs text-gray-500">Project Head</div>
                    </div>
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-2 w-20 h-20 rounded-full bg-rose-800 text-sm font-semibold uppercase flex items-center justify-center text-white">
                            {{$this->getNameInitials($team_leader)}}
                        </div>

                        <div class="text-xs mt-2 text-center uppercase font-semibold">
                            {{$team_leader}}

                        </div>
                        <div class="text-xs text-gray-500">Team Leader</div>
                    </div>


                    @foreach ($team_members as $member)
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-2 w-20 h-20 rounded-full bg-gray-700 text-sm font-semibold uppercase flex items-center justify-center text-white">
                            {{$this->getNameInitials($member)}}
                        </div>

                        <div class=" mt-2 text-center text-sm uppercase font-semibold">
                            {{$member}}

                        </div>
                        <div class="text-xs text-gray-500">Team Member</div>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="w-3/12 py-4  rounded-lg border-2 border-dashed border-gray-200 shadow-sm">


            <div class="relative overflow-x-auto  sm:rounded-lg">
                <div class="mb-4  flex justify-center text-gray-900 ">
                    @if($project['thumbnail_image'])
                    <img class="object-cover w-40 h-40 rounded" src='/assets/images/projects/{{$project['thumbnail_image']}}' />
                    @else
                    <div class="rounded w-40 h-40 text-2xl flex items-center justify-center bg-fuchsia-800 text-white">{{$project['abbreviation']}}</div>
                    @endif
                </div>
                <div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 uppercase px-6 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-white">
                            State / Group
                        </div>
                        <div class="px-6 flex uppercase text-xs  text-gray-500">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            {{$project->division->group->name}}
                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 uppercase px-6 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-white">
                            Division
                        </div>
                        <div class="px-6 flex uppercase text-xs  text-gray-500">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z"></path>
                            </svg>
                            {{$project->division->name}}
                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 text-sm  uppercase px-6  font-medium text-gray-600 whitespace-nowrap dark:text-white">


                            Project Category
                        </div>
                        <div class="px-6 flex text-xs   uppercase text-gray-500">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>
                            Finance
                        </div>
                    </div>
                    <div class=" py-2  dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 text-sm uppercase px-6  font-medium text-gray-600 whitespace-nowrap dark:text-white">


                            Launch date
                        </div>
                        <div class="px-6 flex text-xs   uppercase text-gray-500">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>

                            1st Feb 2023
                        </div>
                    </div>
                    <div class=" py-2 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div scope="row" class="py-1 text-sm  uppercase px-6  font-medium text-gray-600 whitespace-nowrap dark:text-white">


                            Launched By
                        </div>
                        <div class="px-6 flex uppercase text-xs  text-gray-500">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            </svg>
                            CM State
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <div class=" flex justify-end ">

        <a href="/projects">
            <x-dark-button class="my-4 text-sm p-2 rounded-lg shadow mr-2">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>




                back to projects</x-dark-button>
        </a>

        <a href="/project/timeline/{{$project->id}}">

            <x-secondary-button class="mr-2 my-4 text-sm p-2 rounded-lg shadow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                Project Timeline</x-secondary-button>
        </a>

        <x-danger-button wire:click="toggle('confirmingProjectTransfer')" class="my-4 text-sm p-2 rounded-lg shadow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
            </svg>

            Transfer Project </x-danger-button>

    </div>
    <div class="w-full grid grid-cols-3 gap-4 mt-4 ">

        <div class="border-2 border-gray-200 border-dashed p-4">
            <x-main-title>Hardware Requirements</x-main-title>
            <x-sub-title class="h-8">Hardware and software requirement for running -{{$project->title}}</x-sub-title>
            <div class="py-4 flex flex-col justify-center items-center ">

                @if(false) <div>
                    <lottie-player src="/assets/js/lottieanimations/box-empty.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                    <x-sub-title class="font-semibold text-gray-400">Onboarding document not available!</x-sub-title>
                </div>
                @else
                <div class="flex flex-col justify-center items-center">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-32 w-32 fill-rose-800 animate animate-spin" viewBox="-7.2 -7.2 86.40 86.40" enable-background="new 0 0 72 72" xml:space="preserve" stroke="#000000" stroke-width="0.00072" transform="matrix(1, 0, 0, 1, 0, 0)rotate(-45)">



                        <g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.144"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path d="M35.649,45.188c-5.066,0-9.188-4.121-9.188-9.188c0-5.066,4.121-9.188,9.188-9.188c5.065,0,9.188,4.122,9.188,9.188 C44.837,41.067,40.715,45.188,35.649,45.188z M35.649,30.812c-2.86,0-5.188,2.327-5.188,5.188s2.327,5.188,5.188,5.188 s5.188-2.327,5.188-5.188S38.51,30.812,35.649,30.812z"></path>

                                </g>
                                <g>
                                    <path d="M35.913,68.5H35.72c-3.65,0-6.958-2.748-8.125-6.572c-1.561-0.485-3.078-1.115-4.536-1.881 c-1.498,0.842-3.155,1.297-4.777,1.297c-2.091,0-4.015-0.773-5.418-2.177l-0.172-0.182c-2.541-2.54-2.924-6.823-1.034-10.357 c-0.752-1.44-1.274-2.976-1.768-4.585c-3.83-1.157-6.39-4.326-6.39-7.92v-0.193c0-3.607,2.558-6.795,6.384-7.966 c0.519-1.718,1.103-3.29,1.876-4.755c-1.943-3.501-1.652-7.604,0.887-10.144l0.126-0.139c1.462-1.462,3.494-2.269,5.731-2.269 c1.628,0,3.261,0.424,4.717,1.211c1.364-0.705,2.781-1.292,4.236-1.753C28.459,6.262,31.806,3.5,35.72,3.5h0.193 c3.859,0,7.03,2.714,7.96,6.625c1.474,0.469,2.909,1.065,4.288,1.783c1.399-0.82,2.991-1.262,4.597-1.262 c2.262,0,4.368,0.86,5.931,2.422l0.103,0.095c2.772,2.771,3.104,6.936,1.002,10.354c0.73,1.394,1.436,2.813,1.897,4.242 c3.905,0.924,6.81,4.232,6.81,8.171v0.193c0,3.918-2.906,7.207-6.815,8.121c-0.438,1.333-1.068,2.691-1.781,4.062 c2.063,3.443,1.637,7.79-1.157,10.585l-0.146,0.213C57.103,60.6,55.098,61.5,52.983,61.5h0.002c-1.601,0-3.214-0.549-4.656-1.42 c-1.47,0.779-3.003,1.38-4.583,1.873C42.663,65.838,39.531,68.5,35.913,68.5z M22.983,55.719c0.349,0,0.697,0.09,1.01,0.273 c1.821,1.064,3.767,1.873,5.78,2.4c0.76,0.198,1.333,0.824,1.465,1.598c0.431,2.529,2.399,4.51,4.481,4.51h0.193 c2.282,0,3.818-2.252,4.155-4.477c0.119-0.79,0.697-1.433,1.47-1.635c2.061-0.541,4.042-1.37,5.891-2.465 c0.721-0.428,1.632-0.359,2.282,0.169c0.989,0.806,2.153,1.249,3.277,1.25l0,0c1.062,0,2.019-0.396,2.768-1.145l0.133-0.134 c1.654-1.654,1.683-4.389,0.066-6.361c-0.524-0.641-0.6-1.539-0.189-2.258c1.075-1.887,1.856-3.732,2.323-5.488 c0.217-0.817,1.029-1.41,1.872-1.48c2.569-0.213,4.539-2.045,4.539-4.354v-0.193c0-2.336-1.971-4.189-4.542-4.408 c-0.841-0.071-1.6-0.663-1.816-1.479c-0.504-1.899-1.333-3.802-2.41-5.654c-0.421-0.724-0.359-1.633,0.174-2.279 c1.648-1.997,1.688-4.496,0.106-6.078l-0.104-0.095c-0.85-0.848-1.954-1.292-3.147-1.292c-1.151,0-2.298,0.414-3.229,1.164 c-0.645,0.52-1.544,0.589-2.261,0.172c-1.784-1.038-3.692-1.83-5.671-2.355c-0.809-0.214-1.399-0.909-1.479-1.742 C39.871,9.303,38.142,7.5,35.913,7.5H35.72c-2.313,0-4.264,1.895-4.535,4.407c-0.089,0.823-0.676,1.506-1.477,1.719 c-1.935,0.512-3.806,1.283-5.562,2.291c-0.68,0.392-1.528,0.348-2.165-0.112c-1.011-0.729-2.28-1.146-3.482-1.146 c-1.169,0-2.203,0.391-2.912,1.1l-0.14,0.139c-1.6,1.6-1.107,4.267,0.206,6.074c0.471,0.647,0.511,1.513,0.101,2.2 c-1.046,1.755-1.841,3.707-2.431,5.965c-0.197,0.755-0.71,1.326-1.479,1.463C9.308,32.052,7.5,33.914,7.5,35.931v0.193 c0,1.996,1.806,3.835,4.34,4.279c0.771,0.135,1.339,0.707,1.537,1.465c0.547,2.094,1.319,4.047,2.348,5.805 c0.397,0.678,0.347,1.527-0.109,2.168c-1.491,2.098-1.515,4.893-0.045,6.362l0.168,0.181c0.787,0.786,1.821,0.961,2.544,0.961 c1.171,0,2.452-0.451,3.515-1.235C22.149,55.85,22.565,55.719,22.983,55.719z"></path>
                                </g>
                                <g>
                                    <g>
                                        <path d="M52.704,30.489c-0.402,0-0.781-0.244-0.934-0.642c-2.54-6.612-9.007-11.054-16.092-11.055c-0.553,0-1-0.448-1-1 s0.447-1,1-1l0,0c7.906,0,15.124,4.958,17.959,12.338c0.197,0.515-0.06,1.094-0.575,1.292 C52.944,30.468,52.823,30.489,52.704,30.489z" class="fill-gray-800"></path>

                                    </g>
                                    <g>
                                        <path d="M18.936,44.918c-0.339,0-0.67-0.173-0.857-0.484c-0.199-0.33-0.288-0.574-0.448-1.02 c-0.077-0.211-0.175-0.483-0.318-0.857c-0.198-0.516,0.06-1.094,0.575-1.291c0.515-0.199,1.094,0.06,1.292,0.574 c0.149,0.39,0.252,0.674,0.331,0.894c0.146,0.401,0.188,0.513,0.281,0.667c0.285,0.474,0.133,1.088-0.34,1.373 C19.289,44.872,19.111,44.918,18.936,44.918z" class="fill-gray-800"></path>

                                    </g>
                                    <g>
                                        <path d="M35.271,54.895L35.271,54.895c-5.683,0-11.045-2.494-14.711-6.843c-0.356-0.423-0.303-1.054,0.12-1.409 c0.421-0.356,1.053-0.303,1.409,0.12c3.285,3.896,8.09,6.132,13.182,6.132c0.552,0,1,0.448,1,1 C36.271,54.448,35.823,54.895,35.271,54.895z" class="fill-gray-800"></path>

                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h2 class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password requirements:</h2>
                    <ul class="max-w-md space-y-1 text-sm text-gray-500 list-inside text-center dark:text-gray-400">

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>Windows 10/Server 2019</li>

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>4GB ram and 2GB disk Space </li>


                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>.NET Framework 4.8</li>



                    </ul>




                </div>
                @endif


            </div>



        </div>

        <div class="border-2 border-gray-200 border-dashed p-4">
            <x-main-title>Project ONboarding</x-main-title>
            <x-sub-title class="h-8">Steps to follow for onboarding -{{$project->title}}</x-sub-title>

            <div class="py-4 flex flex-col justify-center items-center ">

                @if(false) <div>
                    <lottie-player src="/assets/js/lottieanimations/box-empty.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                    <x-sub-title class="font-semibold text-gray-400">Onboarding document not available!</x-sub-title>
                </div>
                @else
                <div class="flex flex-col justify-center items-center">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-32 w-32 fill-rose-800" viewBox="-7.2 -7.2 86.40 86.40" enable-background="new 0 0 72 72" xml:space="preserve" stroke-width="0.00072" transform="matrix(1, 0, 0, 1, 0, 0)rotate(-0)">






                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M30.694 32.174c-1.168 1.088-10.529 10.17-10.529 10.17l2.499 2.464s8.317-7.676 9.566-8.837c.309-.286.832-.831 1.799-.831h28.365v-3.928H33.043c-.858.001-1.671.337-2.349.961z"></path>
                            <path d="M47.499 10.823c3.326 0 5.141-2.303 5.141-5.141a5.14 5.14 0 1 0-5.141 5.141z" class="fill-gray-800"></path>


                            <path d="M39.877 19.657h1.724l-2.526 9.075h16.85l-2.528-9.075h1.724l2.622 9.075h4.454l-3.58-12.042c-.473-1.663-2.576-4.609-6.217-4.609h-9.802c-3.639 0-5.74 2.946-6.217 4.609l-3.575 12.042h4.454l2.617-9.075z" class="fill-gray-800"></path>


                            <path d="M25.303 28.256l-4.525-8.437s-.266-.402-.759-.163c-.443.214-.243.713-.243.713l1.501 2.865l.934 1.785l-1.077-.485c-1.908-.86-2.96-1.227-3.382-1.416c-.075-.035-.445-.238-.621-.625c-.5-1.118-2.635-6.522-3.114-7.717c-.405-1.011-1.404-2.447-3.457-2.955c-2.337-.578-4.693.896-5.249 3.241L2.122 28.503c-.284 1.084-.772 4.016-.772 5.252l.021 26.254C1.387 62.224 2.986 64.01 5.199 64c2.21-.007 3.723-1.808 3.716-4.02L8.91 37.738l3.401-14.355c.397.971.889 2.154 1.05 2.438c.383.67.761 1.131 1.533 1.494c0 0 4.451 1.842 6.174 2.628a2.466 2.466 0 0 0 2.821-.782l.238-.493l.082.157s.507.893 1.256.934c.215-.681-.161-1.503-.161-1.503z"></path>
                            <path d="M18.423 5.638a5.141 5.141 0 1 1-10.283 0a5.142 5.142 0 0 1 10.283 0z"></path>
                            <path d="M20.739 39.187l10.018-9.324l-1.302-1.397l-10.018 9.325z" class="fill-gray-800"></path>

                        </g>


                    </svg>
                    <h2 class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password requirements:</h2>
                    <ul class="max-w-md space-y-1 text-sm text-gray-500 list-inside text-center dark:text-gray-400">

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>Windows 10/Server 2019</li>

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>4GB ram and 2GB disk Space </li>


                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>.NET Framework 4.8</li>



                    </ul>




                </div>
                @endif


            </div>


        </div>
        <div class="border-2 border-gray-200 border-dashed p-4">
            <x-main-title>Project preliminary Setup</x-main-title>
            <x-sub-title class="h-8">setting </x-sub-title>

            <div class="py-4 flex flex-col justify-center items-center ">

                @if(false) <div>
                    <lottie-player src="/assets/js/lottieanimations/box-empty.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                    <x-sub-title class="font-semibold text-gray-400">Onboarding document not available!</x-sub-title>
                </div>
                @else
                <div class="flex flex-col justify-center items-center">
                    <svg viewBox="0 0 512 512" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#202a38" stroke="#202a38" class="h-32 w-32">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">

                            <g>
                                <path class="fill-rose-800" d="M333.2,242.5c1.6-5.6,2.5-11.6,2.5-17.8c0-35.8-29-64.7-64.7-64.7c-29.2,0-53.9,19.4-62,45.9 c-4.2-0.7-8.6-1.1-13-1.1c-44.5,0-80.6,36.1-80.6,80.6c0,44.5,36.1,80.6,80.6,80.6h135c34.1,0,61.8-27.7,61.8-61.8 C392.8,270.8,366.3,243.6,333.2,242.5z"></path>
                                <path class="fill-gray-800" d="M127.2,101h58.9v50.7c0,3.9,3.1,7,7,7s7-3.1,7-7V94c0-3.9-3.1-7-7-7h-66.7c-3.5-10.4-13.4-18-25-18 C86.9,69,75,80.8,75,95.4s11.8,26.4,26.4,26.4C114,121.8,124.6,112.8,127.2,101z M101.4,107.8c-6.8,0-12.4-5.6-12.4-12.4 S94.6,83,101.4,83s12.4,5.6,12.4,12.4S108.2,107.8,101.4,107.8z"></path>
                                <path class="fill-gray-800" d="M429,121.8c14.5,0,26.4-11.8,26.4-26.4S443.5,69,429,69c-11.6,0-21.5,7.6-25,18h-66.7c-3.9,0-7,3.1-7,7v57.7 c0,3.9,3.1,7,7,7s7-3.1,7-7V101h58.9C405.8,112.8,416.3,121.8,429,121.8z M429,83c6.8,0,12.4,5.6,12.4,12.4s-5.6,12.4-12.4,12.4 s-12.4-5.6-12.4-12.4S422.1,83,429,83z"></path>
                                <path class="fill-gray-800" d="M255.1,70.3v63.2c0,3.9,3.1,7,7,7s7-3.1,7-7V70.3c11.2-3.1,19.4-13.3,19.4-25.4c0-14.5-11.8-26.4-26.4-26.4 s-26.4,11.8-26.4,26.4C235.7,57,244,67.2,255.1,70.3z M262.1,32.5c6.8,0,12.4,5.6,12.4,12.4s-5.6,12.4-12.4,12.4 s-12.4-5.6-12.4-12.4S255.3,32.5,262.1,32.5z"></path>
                                <path class="fill-gray-800" d="M85.8,255.8H53.1v-40.9c11.8-2.6,20.8-13.2,20.8-25.8c0-14.5-11.8-26.4-26.4-26.4S21.1,174.5,21.1,189 c0,11.6,7.6,21.5,18,25v48.7c0,3.9,3.1,7,7,7h39.7c3.9,0,7-3.1,7-7S89.6,255.8,85.8,255.8z M35.1,189c0-6.8,5.6-12.4,12.4-12.4 s12.4,5.6,12.4,12.4s-5.6,12.4-12.4,12.4S35.1,195.9,35.1,189z"></path>
                                <path class="fill-gray-800" d="M85.8,318.1H58.5c-3.1-11.2-13.3-19.4-25.4-19.4c-14.5,0-26.4,11.8-26.4,26.4s11.8,26.4,26.4,26.4 c12.1,0,22.3-8.2,25.4-19.4h27.2c3.9,0,7-3.1,7-7S89.6,318.1,85.8,318.1z M33.1,337.4c-6.8,0-12.4-5.6-12.4-12.4 s5.6-12.4,12.4-12.4s12.4,5.6,12.4,12.4S39.9,337.4,33.1,337.4z"></path>
                                <path class="fill-gray-800" d="M472.9,360v-48.7c0-3.9-3.1-7-7-7h-39.7c-3.9,0-7,3.1-7,7s3.1,7,7,7h32.7v40.9c-11.8,2.6-20.8,13.2-20.8,25.8 c0,14.5,11.8,26.4,26.4,26.4s26.4-11.8,26.4-26.4C490.9,373.4,483.3,363.5,472.9,360z M464.5,397.4c-6.8,0-12.4-5.6-12.4-12.4 s5.6-12.4,12.4-12.4s12.4,5.6,12.4,12.4S471.3,397.4,464.5,397.4z"></path>
                                <path class="fill-gray-800" d="M478.9,222.6c-12.1,0-22.3,8.2-25.4,19.4h-27.2c-3.9,0-7,3.1-7,7s3.1,7,7,7h27.2c3.1,11.2,13.3,19.4,25.4,19.4 c14.5,0,26.4-11.8,26.4-26.4S493.4,222.6,478.9,222.6z M478.9,261.4c-6.8,0-12.4-5.6-12.4-12.4s5.6-12.4,12.4-12.4 s12.4,5.6,12.4,12.4S485.7,261.4,478.9,261.4z"></path>
                                <path class="fill-gray-800" d="M321.8,441.7v-45.2c0-3.9-3.1-7-7-7s-7,3.1-7,7v45.2c-11.2,3.1-19.4,13.3-19.4,25.4 c0,14.5,11.8,26.4,26.4,26.4s26.4-11.8,26.4-26.4C341.1,455,332.9,444.8,321.8,441.7z M314.8,479.5c-6.8,0-12.4-5.6-12.4-12.4 s5.6-12.4,12.4-12.4s12.4,5.6,12.4,12.4S321.6,479.5,314.8,479.5z"></path>
                                <path class="fill-gray-800" d="M227.5,425.1c-12.1,0-22.3,8.2-25.4,19.4h-21v-48c0-3.9-3.1-7-7-7s-7,3.1-7,7v55c0,3.9,3.1,7,7,7h28 c3.1,11.2,13.3,19.4,25.4,19.4c14.5,0,26.4-11.8,26.4-26.4S242,425.1,227.5,425.1z M227.5,463.9c-6.8,0-12.4-5.6-12.4-12.4 s5.6-12.4,12.4-12.4s12.4,5.6,12.4,12.4S234.3,463.9,227.5,463.9z"></path>
                            </g>
                        </g>
                    </svg>




                    <h2 class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password requirements:</h2>
                    <ul class="max-w-md space-y-1 text-sm text-gray-500 list-inside text-center dark:text-gray-400">

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>Windows 10/Server 2019</li>

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>4GB ram and 2GB disk Space </li>


                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>.NET Framework 4.8</li>



                    </ul>




                </div>
                @endif


            </div>


        </div>
        <div class="border-2 border-gray-200 border-dashed p-4">
            <x-main-title>Staging Server </x-main-title>
            <x-sub-title>Details of staging server </x-sub-title>
            <div class="py-4 flex flex-col justify-center items-center ">

                @if(false) <div>
                    <lottie-player src="/assets/js/lottieanimations/box-empty.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                    <x-sub-title class="font-semibold text-gray-400">Onboarding document not available!</x-sub-title>
                </div>
                @else
                <div class="flex flex-col justify-center items-center">
                    <svg viewBox="0 0 512 512" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-32 w-32 fill-rose-800">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">

                            <g>
                                <path class="fill-rose-800" d="M414.8,17.3H97.2c-10.7,0-19.4,8.7-19.4,19.4v69.6c0,10.7,8.7,19.4,19.4,19.4H249v32.7H97.2 c-10.7,0-19.4,8.7-19.4,19.4v69.6c0,10.7,8.7,19.4,19.4,19.4H249v32.7H97.2c-10.7,0-19.4,8.7-19.4,19.4v69.6 c0,10.7,8.7,19.4,19.4,19.4H249v18c2.3-0.4,4.6-0.6,7-0.6c2.4,0,4.7,0.2,7,0.6v-18h151.8c10.7,0,19.4-8.7,19.4-19.4v-69.6 c0-10.7-8.7-19.4-19.4-19.4H263v-32.7h151.8c10.7,0,19.4-8.7,19.4-19.4v-69.6c0-10.7-8.7-19.4-19.4-19.4H263v-32.7h151.8 c10.7,0,19.4-8.7,19.4-19.4V36.7C434.2,26,425.5,17.3,414.8,17.3z M136.4,360.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1 c3.9,0,7,3.1,7,7S140.3,360.5,136.4,360.5z M186.1,360.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1c3.9,0,7,3.1,7,7 S190,360.5,186.1,360.5z M381,330.9c12.5,0,22.6,10.1,22.6,22.6c0,12.5-10.1,22.6-22.6,22.6c-12.5,0-22.6-10.1-22.6-22.6 C358.4,341,368.5,330.9,381,330.9z M136.4,219.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1c3.9,0,7,3.1,7,7S140.3,219.5,136.4,219.5z M186.1,219.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1c3.9,0,7,3.1,7,7S190,219.5,186.1,219.5z M381,189.8 c12.5,0,22.6,10.1,22.6,22.6s-10.1,22.6-22.6,22.6c-12.5,0-22.6-10.1-22.6-22.6S368.5,189.8,381,189.8z M136.4,78.5h-28.1 c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1c3.9,0,7,3.1,7,7S140.3,78.5,136.4,78.5z M186.1,78.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1 c3.9,0,7,3.1,7,7S190,78.5,186.1,78.5z M381,94.1c-12.5,0-22.6-10.1-22.6-22.6c0-12.5,10.1-22.6,22.6-22.6s22.6,10.1,22.6,22.6 C403.7,84,393.5,94.1,381,94.1z"></path>
                                <ellipse class="fill-gray-800" cx="256" cy="466.8" rx="27.8" ry="27.8"></ellipse>
                                <path class="fill-gray-800" d="M406.3,439c-13,0-23.9,8.9-27,20.9c-0.3,0-0.6-0.1-0.9-0.1h-81.3c0.4,2.3,0.6,4.6,0.6,7s-0.2,4.7-0.6,7h81.3 c0.3,0,0.6,0,0.9-0.1c3.1,12,14,20.9,27,20.9c15.4,0,27.8-12.5,27.8-27.8C434.2,451.5,421.7,439,406.3,439z"></path>
                                <path class="fill-gray-800" d="M133.5,459.8c-0.3,0-0.6,0-0.9,0.1c-3.1-12-14-20.9-27-20.9c-15.4,0-27.8,12.5-27.8,27.8 c0,15.4,12.5,27.8,27.8,27.8c13,0,23.9-8.9,27-20.9c0.3,0,0.6,0.1,0.9,0.1h81.3c-0.4-2.3-0.6-4.6-0.6-7s0.2-4.7,0.6-7H133.5z"></path>
                            </g>
                        </g>
                    </svg>





                    <h2 class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password requirements:</h2>
                    <ul class="max-w-md space-y-1 text-sm text-gray-500 list-inside text-center dark:text-gray-400">

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>Windows 10/Server 2019</li>

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>4GB ram and 2GB disk Space </li>


                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>.NET Framework 4.8</li>



                    </ul>




                </div>
                @endif


            </div>


        </div>

        <div class="border-2 border-gray-200 border-dashed p-4">
            <x-main-title>Live Server</x-main-title>
            <x-sub-title>Details of live server</x-sub-title>
            <div class="py-4 flex flex-col justify-center items-center ">

                @if(false) <div>
                    <lottie-player src="/assets/js/lottieanimations/box-empty.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                    <x-sub-title class="font-semibold text-gray-400">Onboarding document not available!</x-sub-title>
                </div>
                @else
                <div class="flex flex-col justify-center items-center">
                    <svg viewBox="0 0 512 512" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-32 w-32 fill-green-800">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path class="fill-green-800" d="M414.8,17.3H97.2c-10.7,0-19.4,8.7-19.4,19.4v69.6c0,10.7,8.7,19.4,19.4,19.4H249v32.7H97.2 c-10.7,0-19.4,8.7-19.4,19.4v69.6c0,10.7,8.7,19.4,19.4,19.4H249v32.7H97.2c-10.7,0-19.4,8.7-19.4,19.4v69.6 c0,10.7,8.7,19.4,19.4,19.4H249v18c2.3-0.4,4.6-0.6,7-0.6c2.4,0,4.7,0.2,7,0.6v-18h151.8c10.7,0,19.4-8.7,19.4-19.4v-69.6 c0-10.7-8.7-19.4-19.4-19.4H263v-32.7h151.8c10.7,0,19.4-8.7,19.4-19.4v-69.6c0-10.7-8.7-19.4-19.4-19.4H263v-32.7h151.8 c10.7,0,19.4-8.7,19.4-19.4V36.7C434.2,26,425.5,17.3,414.8,17.3z M136.4,360.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1 c3.9,0,7,3.1,7,7S140.3,360.5,136.4,360.5z M186.1,360.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1c3.9,0,7,3.1,7,7 S190,360.5,186.1,360.5z M381,330.9c12.5,0,22.6,10.1,22.6,22.6c0,12.5-10.1,22.6-22.6,22.6c-12.5,0-22.6-10.1-22.6-22.6 C358.4,341,368.5,330.9,381,330.9z M136.4,219.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1c3.9,0,7,3.1,7,7S140.3,219.5,136.4,219.5z M186.1,219.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1c3.9,0,7,3.1,7,7S190,219.5,186.1,219.5z M381,189.8 c12.5,0,22.6,10.1,22.6,22.6s-10.1,22.6-22.6,22.6c-12.5,0-22.6-10.1-22.6-22.6S368.5,189.8,381,189.8z M136.4,78.5h-28.1 c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1c3.9,0,7,3.1,7,7S140.3,78.5,136.4,78.5z M186.1,78.5h-28.1c-3.9,0-7-3.1-7-7s3.1-7,7-7h28.1 c3.9,0,7,3.1,7,7S190,78.5,186.1,78.5z M381,94.1c-12.5,0-22.6-10.1-22.6-22.6c0-12.5,10.1-22.6,22.6-22.6s22.6,10.1,22.6,22.6 C403.7,84,393.5,94.1,381,94.1z"></path>
                                <ellipse class="fill-gray-800" cx="256" cy="466.8" rx="27.8" ry="27.8"></ellipse>
                                <path class="fill-gray-800" d="M406.3,439c-13,0-23.9,8.9-27,20.9c-0.3,0-0.6-0.1-0.9-0.1h-81.3c0.4,2.3,0.6,4.6,0.6,7s-0.2,4.7-0.6,7h81.3 c0.3,0,0.6,0,0.9-0.1c3.1,12,14,20.9,27,20.9c15.4,0,27.8-12.5,27.8-27.8C434.2,451.5,421.7,439,406.3,439z"></path>
                                <path class="fill-gray-800" d="M133.5,459.8c-0.3,0-0.6,0-0.9,0.1c-3.1-12-14-20.9-27-20.9c-15.4,0-27.8,12.5-27.8,27.8 c0,15.4,12.5,27.8,27.8,27.8c13,0,23.9-8.9,27-20.9c0.3,0,0.6,0.1,0.9,0.1h81.3c-0.4-2.3-0.6-4.6-0.6-7s0.2-4.7,0.6-7H133.5z"></path>
                            </g>
                        </g>
                    </svg>





                    <h2 class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password requirements:</h2>
                    <ul class="max-w-md space-y-1 text-sm text-gray-500 list-inside text-center dark:text-gray-400">

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>Windows 10/Server 2019</li>

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>4GB ram and 2GB disk Space </li>


                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>.NET Framework 4.8</li>



                    </ul>




                </div>
                @endif


            </div>



        </div>
        <div class="border-2 border-gray-200 border-dashed p-4">
            <x-main-title>Mobile Application</x-main-title>
            <x-sub-title>Mobile application for -{{$project->title}}</x-sub-title>
            <div class="py-4 flex flex-col justify-center items-center ">

                @if(false) <div>
                    <lottie-player src="/assets/js/lottieanimations/box-empty.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                    <x-sub-title class="font-semibold text-gray-400">Onboarding document not available!</x-sub-title>
                </div>
                @else
                <div class="flex flex-col justify-center items-center">
                    <svg class="w-32 h32 fill-rose-800" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M551.424 0H176.128c-47.104 0-85.504 38.4-85.504 85.504v852.992c0 47.104 38.4 85.504 85.504 85.504h375.296c47.104 0 85.504-38.4 85.504-85.504V85.504c0-47.104-38.4-85.504-85.504-85.504M312.832 68.096h102.4c9.216 0 16.896 7.68 16.896 16.896s-7.68 16.896-16.896 16.896h-102.4c-9.216 0-16.896-7.68-16.896-16.896-0.512-9.216 7.168-16.896 16.896-16.896m51.2 921.6c-28.16 0-51.2-23.04-51.2-51.2s23.04-51.2 51.2-51.2 51.2 23.04 51.2 51.2-23.04 51.2-51.2 51.2m238.592-136.704H124.928V170.496h477.696v682.496z" class="fill-rose-800"></path>
                            <path d="M853.504 66.56h-218.112c1.536 6.144 2.048 12.288 2.048 18.432v45.056h88.576c8.704 0 15.872 7.168 15.872 15.872s-7.168 15.872-15.872 15.872h-88.576v64H901.12v637.952h-264.192v54.784c8.192-13.824 23.552-23.04 40.448-23.04 26.624 0 47.616 21.504 47.616 47.616 0 26.624-21.504 47.616-47.616 47.616-19.968 0-36.864-12.288-44.032-29.696-10.24 35.328-43.008 61.44-81.92 61.44h301.568c44.032 0 79.872-35.84 79.872-79.872V146.432c0.512-44.032-35.84-79.872-79.36-79.872z" class="fill-gray-800"></path>
                        </g>
                    </svg>






                    <h2 class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password requirements:</h2>
                    <ul class="max-w-md space-y-1 text-sm text-gray-500 list-inside text-center dark:text-gray-400">

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>Windows 10/Server 2019</li>

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>4GB ram and 2GB disk Space </li>


                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>.NET Framework 4.8</li>



                    </ul>




                </div>
                @endif


            </div>


        </div>

        <div class="flex-2 w-full border-2  border-gray-200 border-dashed p-4">

            <x-main-title>Complete Project Manual</x-main-title>
            <x-sub-title>List of all the manuals published under this project</x-sub-title>
            <div class="py-4 flex flex-col justify-center items-center ">

                @if(false) <div>
                    <lottie-player src="/assets/js/lottieanimations/box-empty.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                    <x-sub-title class="font-semibold text-gray-400">Onboarding document not available!</x-sub-title>
                </div>
                @else
                <div class="flex flex-col justify-center items-center">
                    <svg viewBox="0 0 512 512" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-32 w-32">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">

                            <g>
                                <path d="M378.41,0H208.294h-13.176l-9.314,9.314L57.017,138.102l-9.315,9.314v13.176v265.513 c0,47.361,38.528,85.896,85.896,85.896H378.41c47.36,0,85.888-38.535,85.888-85.896V85.895C464.298,38.528,425.77,0,378.41,0z M432.494,426.104c0,29.877-24.214,54.092-54.084,54.092H133.598c-29.877,0-54.091-24.215-54.091-54.092V160.591h83.717 c24.884,0,45.07-20.179,45.07-45.07V31.804H378.41c29.87,0,54.084,24.214,54.084,54.091V426.104z" class="fill-rose-800"></path>
                                <rect x="277.446" y="93.17" class="fill-gray-800" width="89.373" height="89.373"></rect>
                                <rect x="145.175" y="232.592" class="fill-gray-800" width="221.644" height="25.024"></rect>
                                <rect x="145.175" y="304.09" class="fill-gray-800" width="221.644" height="25.024"></rect>
                                <rect x="145.175" y="375.588" class="fill-gray-800" width="221.644" height="25.024"></rect>
                            </g>
                        </g>
                    </svg>




                    <h2 class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password requirements:</h2>
                    <ul class="max-w-md space-y-1 text-sm text-gray-500 list-inside text-center dark:text-gray-400">

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>Windows 10/Server 2019</li>

                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>4GB ram and 2GB disk Space </li>


                        <li class="flex items-center"><svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>.NET Framework 4.8</li>



                    </ul>




                </div>
                @endif


            </div>


        </div>

    </div>






    <x-jet-confirmation-modal wire:model="confirmingProjectTransfer">


        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            <span class="text-red-800">Transfer Project?</span>
        </x-slot>
        <x-slot name="subtitle">
            Transfer of project to some other division.
        </x-slot>
        <x-slot name="content">
            <div class="bg-red-100 p-4 rounded-lg">
                <span class="text-xs font-semibold text-gray-700 uppercase mb-4">Transfer of any project to some other division will result in.</span>


                <ul class="list-disc list-inside leading-loose text-gray-500 text-xs uppercase">
                    <li>Current Project Head / HOD will not be able to access this project anymore.</li>
                    <li>All the approval requests will be routed to the new Project Head / HOD.</li>
                    <li>If new project head/HOD wants to reshuffle his project team, he can manually change team leader or team members.</li>


                </ul>

            </div>
            <div class="w-full flex flex-col justify-center items-center py-4">

                <div class="p-4 w-full border border-gray-500 border-dashed rounded-lg">
                    <div class="mb-2">
                        <x-main-title>Transfer project</x-main-title>
                    </div>

                    <div class="mb-2 text-bold  text-gray-500 py-2 my-2">{{$project['title']}}</div>

                    <div class="mb-2">
                        <x-main-title>transfer TO</x-main-title>
                    </div>

                    <x-select wire:model="newdivisionid" :userlist="$divisionlist">


                    </x-select>

                </div>



            </div>
            <x-main-title>
                <div class="text-center leading-loose">You are transferring <span class="text-rose-800">{{$project['title']}}</span> to <span class="text-orange-600">{{$this->getSelectedDivisionName()}}</span> </div>
            </x-main-title>




        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingProjectTransfer')" wire:loading.attr="disabled">
                Cancel
            </x-jet-secondary-button>

            @if($this->newdivisionid !=0)
            <x-jet-danger-button class="ml-2" wire:click="toggle('projectTransferFinal')" wire:loading.attr="disabled">
                Proceed
            </x-jet-danger-button>
            @endif
        </x-slot>
    </x-jet-confirmation-modal>

    <x-jet-confirmation-modal wire:model="projectTransferFinal">


        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            <span class="text-red-800">Transfer Project</span>
        </x-slot>
        <x-slot name="subtitle">
            Transfer of project to some other division.
        </x-slot>
        <x-slot name="content">

            <div class="w-full flex flex-col justify-center items-center py-4">

                <div class="p-4 w-full border border-gray-500 border-dashed rounded-lg">

                    <x-main-title>
                        <div class="text-center leading-loose">Are you sure you want to transfer <span class="text-rose-800">{{$project['title']}}</span> to <span class="text-orange-600">{{$this->getSelectedDivisionName()}}</span> </div>
                    </x-main-title>


                </div>



            </div>





        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('projectTransferFinal')" wire:loading.attr="disabled">
                Cancel
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="transferProject({{$project['id']}})" wire:loading.attr="disabled">
                Transfer it !
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>


</div>
