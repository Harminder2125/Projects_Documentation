<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
class UnpublishedProjectsComponent extends Component
{
    public function render()
    {
        $unpublishedproj = Project::where('publish_status','!=','PUBLISHED')->get();
        return view('livewire.unpublished-projects-component',[
            "projects"=>$unpublishedproj
        ]);
    }
}
