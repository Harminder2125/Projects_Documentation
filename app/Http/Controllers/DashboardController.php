<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\ProjectTeamMembers;
use App\Models\ManualContent;
use Illuminate\Support\Facades\Gate;
use Livewire\Livewire;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $pending_tasks_count = Project::where('Publish_status',1)->orWhere('Publish_status',2)->count();
        $prjdata=[];
        if(Auth::user()->isAdmin())
        {
            $$pending_tasks_count  = Project::whereIn('publish_status', [1, 2])->count();
            $countcreated=Project::where('group_id',Auth::user()->group_id)->where('publish_status','1')->get()->count();
            $countpending=Project::where('group_id',Auth::user()->group_id)->where('publish_status','2')->get()->count();
            $countpublished=Project::where('group_id',Auth::user()->group_id)->where('publish_status','3')->get()->count();
            $x=Project::where('group_id',Auth::user()->group_id)->get();
            $t=0;
            foreach ($x as $prj) {
                $t+=$prj->manuals->count();
            }
            $countmanual=$t;
            // dd($t);
        }


        else
        {
            $pending_tasks_count  = Project::whereIn('publish_status', [1, 2])->whereHas('team',function($query){

                $query->where('user_id',Auth::user()->id)->where('projectrole_id',1);
            })->count();
            
            $x=ProjectTeamMembers::where('projectrole_id','=','1')->where('user_id','=',Auth::user()->id)->get();
            $countcreated=0;
            $countpending=0;
            $countpublished=0;
            $countmanual=0;
            foreach($x as $prj){
                if($prj->project->publish_status==1)
                {
                    $countcreated++;
                }
                else if($prj->project->publish_status==2)
                {
                    $countpending++;
                }
                else if($prj->project->publish_status==3)
                {
                    $countpublished++;
                }

                if($prj->project->manuals!=null)
                 $countmanual+=$prj->project->manuals->count();
            }
            
           

          
        }

        return view('dashboard',["pending"=>$pending_tasks_count,
        "countcreated"=>$countcreated,
        "countpending"=>$countpending,
        "countpublished"=>$countpublished,
        "countmanual"=>$countmanual
        ]);
    }
    
   
    public function assignRoles()
    {
       
        return view('assign-role');
    }
    
    public function projectcreate()
    {
        
        return view('project-create',[
            'project_name'=>'Create Project',
            'abbreviation'=>'Here you may create new project manual'
        ]);
    }
   
    public function projecttimeline($id)
    {   
        $project = Project::where('id',$id)->first();
   
        return view('project-timeline',[
            'project_id'=>$id,
            'project_name'=>$project->title,
            'abbreviation'=>$project->abbreviation
        ]);
    }
    public function team()
    {
        return view('team');
    }
   
    public function manual($id)
    {
        $manual =  ManualContent::where("manual_id","=",$id)->where("parent_id","=",null)->get();
        
        return view('admin.manualForm.manual',['manual'=>$manual,'point'=>null]);
    }

    public function createmanual($id)
    {
        return view('createmanual',['id'=>$id]);
    }

    public function notify()
    {
        return view('notifications');
    }

    public function administrative_privileges()
    {
        return view('privileges.administrative');
    }
     public function project_privileges()
    {
        return view('privileges.project');
    }
    
    

    
    
}
