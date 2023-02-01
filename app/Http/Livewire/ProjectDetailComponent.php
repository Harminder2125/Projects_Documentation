<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class ProjectDetailComponent extends Component
{
    public $project_id;
    public $team_leader="ss duggal";
    public $team_members=["navinder sharma","narinder singh","dinesh sharma"];

    public function getNameInitials($value)
    {
        $words = explode(" ", $value);
        $acronym = "";
        foreach ($words as $w) {
            $acronym .= mb_substr($w, 0, 1);
        }
        return $acronym;
    }

    public function mount($id){
        $this->project_id=$id;
    }

    public function render()
    {
        $project=Project::find($this->project_id);
        return view('livewire.project-detail-component',["project"=>$project]);
    }
}
