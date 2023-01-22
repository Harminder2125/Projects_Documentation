<div>
   <p>These projects have been approved by you (Admin) and are visible on the portal. </p>
    @foreach($projects as $project)
    <h1>{{$project->title}}</h1>
    @endforeach
</div>
