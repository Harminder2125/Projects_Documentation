<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Project;

class UserController extends Controller
{
    public function projects()
    {
        return view('user.projects');
    }
    public function manageprojects()
    {
    //     /* If user is HOD of any division we will retrieve all the projects of that division */
    //    $divisions = Auth::user()->divisions->pluck('id')->toArray();
    //    $projects = null;
       
    //    if(count($divisions)>0)
    //     {    
    //          $publishedprojects = Project::Published()->whereIn('division_id',$divisions)->get();
            
    //     }
        
        return view('user.manageprojects',['projects'=>$projects]);
    }
}
