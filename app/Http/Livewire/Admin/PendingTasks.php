<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;
use Livewire\WithPagination;
use Auth;

class PendingTasks extends Component
{
    use WithPagination;
    public function render()
    {
        $projects = "";
        if(Auth::user()->isAdmin())
        {
            $projects = Project::whereIn('publish_status', [1, 2])->orderBy('publish_status','DESC')->paginate(5);
            
        }
        else
        {
            $projects = Project::whereIn('publish_status', [1, 2])->whereHas('team',function($query){

                $query->where('user_id',Auth::user()->id)->where('projectrole_id',1);
            })->orderBy('publish_status','ASC')->paginate(5);
        }
       
       $projects->withPath('/dashboard');
      
        return view('livewire.admin.pending-tasks',['projects'=>$projects]);
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
}
