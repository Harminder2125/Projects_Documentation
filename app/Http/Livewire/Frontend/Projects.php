<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Project;

class Projects extends Component
{
    public $pagesize;
    public function mount()
    {
        $this->pagesize = 5;
    }
    
    public function render()
    {
        $projects = Project::paginate($this->pagesize);
        $projects->withPath('/projects');
        return view('livewire.frontend.projects',['projects'=>$projects]);
    }
}
