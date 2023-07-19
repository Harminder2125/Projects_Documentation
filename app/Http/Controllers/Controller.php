<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Role;
use App\Models\ProjectRoles;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function groupmaster()
    {
       return view('masters.groups');
    }
    public function rolemaster()
    {
        $roles = Role::all();
        $projectroles = ProjectRoles::all();
        return view('masters.role',['administrative'=>$roles,"projectbased"=>$projectroles]);
    }
     public function categoriesmaster()
    {
        return view('masters.categories');
    }

}
