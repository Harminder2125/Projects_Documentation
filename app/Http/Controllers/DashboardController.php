<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\ManualContent;
use Illuminate\Support\Facades\Gate;
use Livewire\Livewire;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $pending_tasks_count = Project::where('Publish_status',1)->orWhere('Publish_status',2)->count();
        
        if(Auth::user()->isAdmin())
        {
            $$pending_tasks_count  = Project::whereIn('publish_status', [1, 2])->count();
            
        }
        else
        {
            $pending_tasks_count  = Project::whereIn('publish_status', [1, 2])->whereHas('team',function($query){

                $query->where('user_id',Auth::user()->id)->where('projectrole_id',1);
            })->count();
        }
        return view('dashboard',["pending"=>$pending_tasks_count]);
    }
    
    public function groups()
    {
        return view('groups');
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
    public function categories()
    {
        return view('categories');
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
