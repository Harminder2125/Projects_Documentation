<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class PublishedProjectsComponent extends Component
{

    public function render()
    {
        $projects = Project::where('publish_status','=','PUBLISHED')->get();
        $unpublishedproj = Project::where('publish_status','=','PUBLISHED')->get();
        return view('livewire.published-projects-component',[
            "projects" => $projects,
            "unpublishedproj"=>$unpublishedproj
        ]);
    }
}
