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
 public function contactus()
    {
        $data= [];
        array_push($data,["group"=>"punjab","Officer"=>"Harminder Singh","Designation"=>"Scientist-B & Assistant Director(IT)","email"=>"harminder.singh90@nic.in","contact"=>"9888983051","voip"=>"41307"]);
        array_push($data,["group"=>"Haryana","Officer"=>"Gurpreet Singh","Designation"=>"Scientist-B & Assistant Director(IT)","email"=>"gurpreet.singh90@nic.in","contact"=>"9888983051","voip"=>"41307"]);
        array_push($data,["group"=>"Himachal Pradesh","Officer"=>"Mohammad Kashif","Designation"=>"Scientist-B & Assistant Director(IT)","email"=>"mohammad.kashif@nic.in","contact"=>"9888983051","voip"=>"41307"]);
        array_push($data,["group"=>"Bihar","Officer"=>"Mukesh Kumar Ralli","Designation"=>"Scientist-F & Senior Technical Director(IT)","email"=>"mukesh.ralli@nic.in","contact"=>"9888983051","voip"=>"41307"]);
        array_push($data,["group"=>"Chandigarh","Officer"=>"Sarbjit Singh Duggal","Designation"=>"Scientist-F & Senior Technical Director(IT)","email"=>"sarbjit.duggal@nic.in","contact"=>"9888983051","voip"=>"41307"]);

        return view('frontend.contactus',["nodals"=>$data]);
    }

    
}
