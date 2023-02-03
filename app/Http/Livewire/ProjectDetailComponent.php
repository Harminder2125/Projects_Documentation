<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Division;
use App\Models\Featurebox;

class ProjectDetailComponent extends Component
{
    public $project_id;
    public $featurebox=[];
    public $team_leader="ss duggal";
    public $team_members=["navinder sharma","narinder singh","dinesh sharma"];
    public $confirmingProjectTransfer = false;
    public $projectTransferFinal = false;
    public $divisionlist=[];
    public $newdivisionid=0;

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
    public function transferProject($id)
    {
            $project = Project::find($id);
            $project->division_id = $this->newdivisionid;
            $project->save();
            $this->toggle('projectTransferFinal');
            $this->toggle('confirmingProjectTransfer');
            $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Project '.$project->title.' successfully transferred to '.$project->division->name
        ]);
      
        $this->emit('close-banner');


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
      else if($key == 'projectTransferFinal'){
         $this->projectTransferFinal = !$this->projectTransferFinal;
      }
      else{

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
        $this->featurebox=Featurebox::where("project_id","=",$id)->get();
        

    }

    public function render()
    {
        $project=Project::find($this->project_id);
        return view('livewire.project-detail-component',["project"=>$project]);
    }
}
