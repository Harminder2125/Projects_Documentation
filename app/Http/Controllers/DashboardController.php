<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
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
        return view('admin.manualform.manual',['id'=>$id]);
    }

    public function createmanual($id)
    {
        return view('createmanual',['id'=>$id]);
    }

    

    
    
}
