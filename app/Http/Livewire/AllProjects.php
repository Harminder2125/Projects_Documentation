<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Category;
use App\Models\ProjectStatus;

class AllProjects extends Component
{
    public $search = '';
    public $category=0;
    public $status=0;
    public function render()
    {
        // $projects = Project::paginate(4);
         $projects = Project::when($this->search,function($query, $search){
            $result =  $query->where('title','LIKE',"%$this->search%");
            if($this->category!=0)
            {
                $result = $result->where('category','=',$this->category);
            }
            if($this->status!=0)
            {
                $result = $result->where('publish_status','=',$this->status);
            }
            return $result;

            
         })->orderBy('id','DESC')->paginate(4);
        //  $projects->withPath('/projects');

        $categories = Category::all();
        $status= ProjectStatus::all();
       

        return view('livewire.admin.all-projects',['allprojects'=>$projects,'statuslist'=>$status,'categorylist'=>$categories]);
    }

    function openProjectForEditing($id)
    {
         return redirect()->to('/admin/edit/project/'.$id);
    }
    public function searchProjects()
    {
       
        $projects = Project::when($this->category!=0,function($query){
            return $query->where('category',$this->category);
        })->orderBy('id','DESC')->paginate(4);
    
        
        // if($this->category!=0)
        // {
        //     $projects->where('category','=',$this->category);
        // }
        // if($this->status!=0)
        // {
           
        //    $projects->where('publish_status','=',$this->status);
        // }
        // if($this->search)
        // {
        //   $projects->where('title','LIKE',"%$this->search%");
        // }
        
            
       
        $categories = Category::all();
        $status= ProjectStatus::all();
       

        return view('livewire.admin.all-projects',['allprojects'=>$projects,'statuslist'=>$status,'categorylist'=>$categories]);
    }
}
