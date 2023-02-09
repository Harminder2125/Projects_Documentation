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
        if (Gate::allows('is_admin')) {
                return view('projects');
        }
       abort(404);
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

    public function manageDivisions()
    {
        return view('admin.manage-divisions');
    }
    public function divisions()
    {
        return view('divisions');
    }
    public function team()
    {
        return view('team');
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
