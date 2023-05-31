<div class="flex flex-col bg-stone-100 w-full items-center shadow-2xl">

    <div class="w-8/12 bg-white min-h-screen p-8">
        <div>
            <x-main-heading>Projects</x-main-heading>
            <span class="flex mb-2 mt-4">
                <a href="/" class="">
                    <h1 class="!text-red-500 font-semibold">Home >
                    </h1>
                </a>



                <x-sub-heading>Projects</x-sub-heading>


            </span>
            <hr />

        </div>

        <div class="grid grid-cols-3">
            @foreach($projects as $project)
            <div>
                {{$project->title}}
            </div>

            @endforeach
        </div>
    </div>


</div>
