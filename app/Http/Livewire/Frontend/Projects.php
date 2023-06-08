<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Project;
use App\Models\Category;
use App\Models\Group;



class Projects extends Component
{
    public $pagesize;
    public $categories;
    public $groups;
    public $filter = [
        "category"=>"",
        "group"=>"",
        "categoryname"=>"",
        "groupname"=>""

    ];

    public $projectscount=0;
    public function mount()
    {
        $this->pagesize = 12;
        $this->categories = Category::all();
        $this->groups = Group::all();
    
    }
    
    public function render()
    {
        // $projects = Project::where('publish_status',1)->paginate($this->pagesize);
        $category = $this->filter['category'];
        $group = $this->filter['group'];
        $this->filter['categoryname'] = $this->getCategoryName($category);
        $this->filter['groupname'] = $this->getGroupName($group);


        $projects = Project::when($group,function($query, $group){
                return $query->where('group_id',$group);
         })->when($category,function($query, $category){
                return $query->where('category',$category);
         })->orderBy('id','DESC')->where('publish_status',3)->paginate($this->pagesize);

        $this->projectscount = $projects->count();
        $projects->withPath('/projects');
        return view('livewire.frontend.projects',['projects'=>$projects]);
    }
    public function getCategoryName($cat)
    {
      
        foreach($this->categories as $category)
        {
            if($category->id == $cat)
            {
                return $category->name;
            }
        }
        return "";

    }
    public function getGroupName($grp)
    {
         foreach($this->groups as $group)
        {
            if($group->id == $grp)
            {
                return $group->name;
            }
        }
        return "";

    }


    public function resetFilters()
    {
       
        $this->filter["category"]= "";
        $this->filter["group"]= ""; 
        $this->filter["categoryname"]= "";
        $this->filter["groupname"]= ""; 


    
    }
}
