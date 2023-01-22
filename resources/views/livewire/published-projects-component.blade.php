<div>
   <p>These projects have been approved by you (Admin) and are visible on the portal. </p>
   <div class="grid md:grid-cols-4 sm:grid-cols-3 xs:grid-cols-1 grid-flow-row gap-4 mt-5">
    @foreach($projects as $project)
    <div class="p-4 border border-green-300 bg-green-100 rounded"><h1>{{$project->title}}</h1>
    <div class="flex justify-end text-sm">
        <a href="#" class="text-green-500 hover:text-green-800">open..</a>
    </div>
    </div>
    @endforeach
    </div>
</div>
