<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Category;
use App\Models\ProjectStatus;
use DB;

class AllProjects extends Component
{
    public $search = '';
    public $category=0;
    public $categoryname="";
    public $status=0;
    public $statusname="";
    public $temp = 0;
    public function render()
    {

         $projects = Project::when($this->category!=0, function ($query) {
                return $query->where('category', $this->category);
            })
            ->when($this->search, function ($query) {
                return $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->status !=0, function ($query) {
                return $query->where('publish_status', $this->status);
            })
            ->orderBy('id','DESC')->paginate(4);
            $projects->withPath('/admin/projects');
          
        $categories = Category::all();
        $status= ProjectStatus::all();
       if($this->categoryname != 0)
       {
        $ct =  Category::find($this->category);
        if($ct)
            $this->categoryname =$ct->name;
       }
        
        if($this->status != 0)
        {
            $st =ProjectStatus::find($this->status);
            if($st)
                 $this->statusname = $st->name;
        }
       

       

        return view('livewire.admin.all-projects',['allprojects'=>$projects,'statuslist'=>$status,'categorylist'=>$categories]);
    }

    function openProjectForEditing($id)
    {
         return redirect()->to('/admin/edit/project/'.$id);
    }

    function openProjectDetails($projectid)
    {
        return redirect()->to('/admin/project/'.$projectid);
    }
    public function searchProjects()
    {
       $this->temp =1;
        $this->render();
    }
    public function resetSearchForm()
    {
        $this->search = "";
        $this->status = 0;
        $this->category =0;
        $this->categoryname = "";
        $this->statusname = "";


    }
}
