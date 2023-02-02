<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Division;

class ProjectDetailComponent extends Component
{
    public $project_id;
    public $team_leader="ss duggal";
    public $team_members=["navinder sharma","narinder singh","dinesh sharma"];
    public $confirmingProjectTransfer = false;
    public $divisionlist=[];
    public $newdivisionid="";

    public function getSelectedDivisionName(){

        $name = "";
        foreach($this->divisionlist as $div)
        {
            if($div['id'] == $this->newdivisionid)
            {
                $name = $div['name'];
                break;
            }
        }
        return $name;
    }
    
    public function toggle($key){
       
     if($key == 'confirmingProjectTransfer')
     {
        $this->confirmingProjectTransfer = !$this->confirmingProjectTransfer;
        if($this->confirmingProjectTransfer)
        {
             $divlist=Division::all();
             foreach($divlist as $div)
             {
                $div->name = $div->name."-".$div->hod->name;
             }
             $this->divisionlist = $divlist->toArray();
        }
     }
            
    }

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
