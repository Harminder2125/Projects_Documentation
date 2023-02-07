<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function users()
    {
        return view('users');
    }
    public function groups()
    {
        return view('groups');
    }
    public function assignRoles()
    {
       
        return view('assign-role');
    }
    public function projects()
    {
        return view('projects');
    }
    public function projectcreate()
    {
        return view('project-create',[
            'project_name'=>'Create Project',
            'abbreviation'=>'Here you may create new project manual'
        ]);
    }
    public function projectdetail($id)
    {   
        $project = Project::where('id',$id)->first();
   
        return view('project-detail',[
            'project_id'=>$id,
            'project_name'=>$project->title,
            'abbreviation'=>$project->abbreviation
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

    public function divisions()
    {
        return view('divisions');
    }
    public function categories()
    {
        return view('categories');
    }

    public function manual()
    {
        return view('manual');
    }


    
    
}
