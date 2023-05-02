<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Division;
use App\Models\Featurebox;
use App\Models\User;
use App\Models\ProjectTeamMembers;
use App\Models\Manual;
use App\Models\Events;
use App\Models\EventsVisibleto;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


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
    public $confirmingaddmanual = false;
    public $confirmingManualDeletion = false;

    public $assignteamfinal =false;
    public $projectheadmodal = false;
    public $teamleadermodal = false;
    public $teammembermodal = false;
    public $groupusers = [];
    public $manuals = [];
    public $manual = [
        "id"=>"",
        "project_id"=>"",
        "title"=>"",
        "version"=>"",
        "staging_server_url"=>"",
        "major_changes"=>""
    ];

    public $temp=[
        "project_head_id"=>"",
        "project_head_name"=>"",
        "team_leader_id"=>"",
        "team_leader_name"=>"",
        "members"=>[],
        "team_member_id"=>"",
        "team_member_name"=>"",

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
    public function updateTeam()
    {
        $this->project_head = "";
        $this->team_leader = "";
        $this->team_members= [];
        $this->temp['members'] = [];
        $project=Project::find($this->project_id);
        if($project->head->first()){
            $head = $project->head->first();
            $this->project_head = $head;
            $this->temp['project_head_id'] =$head->user->id ;
            $this->temp['project_head_name']=$head->user->name;
        }
        if($project->leader->first()){
            $leader = $project->leader->first();
            $this->team_leader = $leader;
            $this->temp['team_leader_id'] =$leader->user->id;
            $this->temp['team_leader_name']=$leader->user->name;
        }
        $members = $project->members;
        if($members)
        {
                foreach($members as $member)
               {
                   array_push($this->team_members, ["team_member_id"=>$member->user->id,"team_member_name"=>$member->user->name]);
                   array_push($this->temp['members'],["team_member_id"=>$member->user->id,"team_member_name"=>$member->user->name]);
               }
        }
    }
    public function mount($id){
        $this->project_id=$id;
        $this->featurebox=Featurebox::where("project_id","=",$id)->get();
    
        $this->users = User::EndUser()->get();
       
       
        // $this->temp['team_leader_id'] = "";
        // $this->temp['project_head_id']="";
        // $this->temp['project_head_name']="";
        // $this->temp['team_leader_name']="";
      
         $this->updateTeam();

        
        
    }

    public function render()
    {
        $project=Project::find($this->project_id);
        $this->loadManuals();
        return view('livewire.admin.project-detail-component',["project"=>$project]);
    }
    public function loadManuals()
    {
        $this->manuals = Manual::where('project_id',$this->project_id)->get();
    }
public function toggle($key)
    {
        if($key == 'confirmingteamassign')
            $this->confirmingteamassign = !$this->confirmingteamassign;
        else  if($key == 'confirmingaddmanual')
            $this->confirmingaddmanual = !$this->confirmingaddmanual;
        else  if($key == 'confirmingManualDeletion')
            $this->confirmingManualDeletion = !$this->confirmingManualDeletion;
        else if($key =='assignteamfinal')
            $this->assignteamfinal= !$this->assignteamfinal;
        else if($key=='projectheadmodal')
        {
            $this->projectheadmodal = !$this->projectheadmodal;        
        }
        else if($key=='teamleadermodal')
        {
            $this->teamleadermodal = !$this->teamleadermodal;        
        }
        else if($key=='teammembermodal')
        {
            $this->teammembermodal = !$this->teammembermodal;        
        }
        else if($key=='teammodal')
        {
            $this->teammodal = !$this->teammodal;        
        }
        else{

        }
    }
    public function selectProjectHead()
    {
         $head =  $this->users->where('id',$this->temp['project_head_id'])->first();
         //$this->project_head = $head->name;
        $this->temp['project_head_name'] = $head->name;
         $this->toggle('projectheadmodal');
    }
     public function selectTeamLeader()
    {
         $leader =  $this->users->where('id',$this->temp['team_leader_id'])->first();
       
        $this->temp['team_leader_name'] = $leader->name;
         $this->toggle('teamleadermodal');
    }
     public function selectTeamMember()
    {
         $member=  $this->users->where('id',$this->temp['team_member_id'])->first();
       
        array_push($this->temp['members'],["team_member_id"=>$this->temp['team_member_id'],"team_member_name"=>$member->name]);
         $this->toggle('teammembermodal');
    }
    public function removeTeamMember($index)
    {
     
       
               unset($this->temp['members'][$index]);
          
    }
    public function finalizeTeam()
    {
        
        $data = [];
        array_push($data,["project_id"=>(int)$this->project_id,"user_id"=>(int)$this->temp['project_head_id'],"projectrole_id"=>1]);
        array_push($data,["project_id"=>(int)$this->project_id,"user_id"=>(int)$this->temp['team_leader_id'],"projectrole_id"=>2]);
        foreach($this->temp['members'] as $member)
        {   
            array_push($data,["project_id"=>(int)$this->project_id,"user_id"=>(int)$member['team_member_id'],"projectrole_id"=>3]);
            
        }
        //Delete all Existing Data
        ProjectTeamMembers::where('project_id',$this->project_id)->delete();
       
        //Add New Entries
        ProjectTeamMembers::insert($data);  

        //Retrieve updated results
       $this->updateTeam();
        $this->toggle('assignteamfinal');
        $this->toggle('confirmingteamassign');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Team assigned successfully!'
        ]);
      
        $this->emit('close-banner');

    }

    public function addManual()
    {
        
        // Validator::make($this->manual, [
        //     'title' => ['required', 'string', 'max:255'],
        //     'version' => ['required', 'string'],
        // ])->validate();
        // dd("gee");
        $this->manual['project_id'] = $this->project_id;
        $data =  new Manual();
        $data->project_id = $this->manual['project_id'];
        $data->title = $this->manual['title'];
        $data->version = $this->manual['version'];
        $data->staging_server_url = $this->manual['staging_server_url'];
        $data->major_changes = $this->manual['major_changes'];
        $data->save();
        $this->resetManualArray();
       // Manual::create($this->manual);
       
       $proj=Project::find($data->project_id);
       $event =  new Events();
       $event->payload=Auth::user()->name.'(empcode:'.Auth::user()->empcode.') has added Manual with title '.$data->title.' and version '.$data->version.' to the project with title '.$proj->title;
       $event->save();
    $lastevent=$event->id;
       $visibleto=ProjectTeamMembers::all()->where('project_id','=',$data->project_id);
       
       foreach($visibleto as $vis)
       {
        $EventsVisibleto=new EventsVisibleto();
        $EventsVisibleto->event_id=$lastevent;
        $EventsVisibleto->user_id=$vis->user_id;
        $EventsVisibleto->save();
       }
        
       
       
       $this->toggle('confirmingaddmanual');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'New manual added successfully!'
        ]);
      
        $this->emit('close-banner');
    }
    
    public function deleteManual($id)
    {
        $this->manual= Manual::find($id);
        $this->toggle('confirmingManualDeletion');
    }
    public function resetManualArray()
    {
        $this->manual['id'] = "";
        $this->manual['project_id'] = "";
        $this->manual['title'] = "";
        $this->manual['version'] = "";
        $this->manual['staging_server_url'] = "";
        $this->manual['major_changes'] = "";
    }
    public function deleteMan($id)
    {
        $mymanual = Manual::find($id);
        $mymanual->delete();
        $this->resetManualArray();
         $this->toggle('confirmingManualDeletion');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Manual deleted successfully!'
        ]);
      
        $this->emit('close-banner');
    }
}
