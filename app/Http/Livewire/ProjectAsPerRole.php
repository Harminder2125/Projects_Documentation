<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProjectTeamMembers;
use Illuminate\Support\Facades\Auth;

class ProjectAsPerRole extends Component
{
    public function render()
    {
      
        $team_head = ProjectTeamMembers::where('user_id','=',Auth::user()->id)->where('projectrole_id','=',1)->get();
        $team_leader = ProjectTeamMembers::where('user_id','=',Auth::user()->id)->where('projectrole_id','=',2)->get();
        $team_member = ProjectTeamMembers::where('user_id','=',Auth::user()->id)->where('projectrole_id','=',3)->get();
        
        return view('livewire.project-as-per-role',[
            "team_head" => $team_head,
            "team_leader" => $team_leader,
            "team_member" => $team_member,
        ]);
    }
}
