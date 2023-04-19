<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProjectTeamMembers;
use Illuminate\Support\Facades\Auth;

class ProjectAsPerRole extends Component
{
    public $roleid="";
    public function mount($id=null){
        $this->roleid=$id;
    }
    public function render()
    {
        
        $team_role = ProjectTeamMembers::where('user_id','=',Auth::user()->id)->where('projectrole_id','=',$this->roleid)->get();
        // $team_leader = ProjectTeamMembers::where('user_id','=',Auth::user()->id)->where('projectrole_id','=',2)->get();
        // $team_member = ProjectTeamMembers::where('user_id','=',Auth::user()->id)->where('projectrole_id','=',3)->get();
        
        return view('livewire.project-as-per-role',[
            "team_role" => $team_role,
            "role"=>$this->roleid,
            // "team_leader" => $team_leader,
            // "team_member" => $team_member,
        ]);
    }
}
