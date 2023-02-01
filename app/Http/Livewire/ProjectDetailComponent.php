<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class ProjectDetailComponent extends Component
{
    public $project_id;
    public function mount($id){
        $this->project_id=$id;
    }

    public function render()
    {
        $project=Project::find($this->project_id);
        return view('livewire.project-detail-component',["project"=>$project]);
    }
}
