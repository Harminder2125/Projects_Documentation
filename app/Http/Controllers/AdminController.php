<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Project;


class AdminController extends Controller
{
    public function users()
    {
        
        return view('admin.users');
    }
    public function projects()
    {
        
        return view('admin.projects');
        
    }
    public function createproject()
    {
        if (Gate::allows('is_admin')) {
                return view('admin.createproject');
        }
       abort(404);
    }
    public function editProject($projectid)
    {
        return view('admin.editproject',['projectid'=>$projectid]);
    }

    public function projectdetail($id)
    {   
        $project = Project::where('id',$id)->first();
   
        return view('admin.project-detail',[
            'project_id'=>$id,
            'project_name'=>$project->title,
            'abbreviation'=>$project->abbreviation
        ]);
    }
}
