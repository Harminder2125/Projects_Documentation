<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Project;
use App\Models\Category;
use App\Models\Manual;
use App\Models\Group;




class HomeController extends Controller
{
    public function index()
    {
        $countpublished = Project::where('publish_status',1)->count();
        $countunpublish = Project::where('publish_status','<>',1)->count();
        $countcategory = Category::count();
        $countmanual= Manual::count();
        $countgroups = Group::count();
        


        return view('frontend.index',
        [
            "published"=>$countpublished,
            "unpublished"=>$countunpublish,
            "categories"=>$countcategory,
            "manuals"=>$countmanual,
            "groups"=>$countgroups,
        ]);
    }
    public function projects()
    {

        return view('frontend.projects');
    }
    public function about()
    {

        return view('frontend.about');
    }


    
}
