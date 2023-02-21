<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Division;
use App\Models\Featurebox;
use App\Models\User;

class ProjectDetailComponent extends Component
{
    public $project_id;
    public $featurebox=[];
    public $users=[];
    public $project_head="";
    public $team_leader="";
    public $team_members=[];
    public $confirmingProjectTransfer = false;
    public $projectTransferFinal = false;
    public $divisionlist=[];
    public $newdivisionid=0;
    public $confirmingteamassign = false;
    public $assignteamfinal =false;
    public $teammodal = false;
    public $groupusers = [];
    public $temp=[
        "project_head"=>"",
    ];
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
        $this->users = User::all();
    }

    public function render()
    {
        $project=Project::find($this->project_id);
        
        if($project->head->first()){$this->project_head = $project->head->first()->user->name;}
        if($project->leader->first())$this->team_leader = $project->leader->first()->user->name;
        $members = $project->members;
         if($members)
        {
                foreach($members as $member)
               {
                   array_push($this->team_members, $member->user->name);
               }
        }
       
        return view('livewire.admin.project-detail-component',["project"=>$project]);
    }
public function toggle($key)
    {
        if($key == 'confirmingteamassign')
            $this->confirmingteamassign = !$this->confirmingteamassign;
        else if($key =='assignteamfinal')
            $this->assignteamfinal= !$this->assignteamfinal;
        else if($key=='teammodal')
        {
            $this->teammodal = !$this->teammodal;        
        }
        else{

        }
    }
    public function selectProjectHead()
    {
        $head =  $this->users->where('id',$this->temp['project_head'])->first();
         $this->project_head = $head->name;
         $this->toggle('teammodal');
    }
}
