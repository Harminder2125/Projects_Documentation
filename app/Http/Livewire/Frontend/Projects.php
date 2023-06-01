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

    public $projectscount=0;
    public function mount()
    {
        $this->pagesize = 12;
        $this->categories = Category::all();
        $this->groups = Group::all();
    
    }
    
    public function render()
    {
        $projects = Project::where('publish_status',1)->paginate($this->pagesize);
        $this->projectscount = $projects->count();
        $projects->withPath('/projects');
        return view('livewire.frontend.projects',['projects'=>$projects]);
    }
}
