<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Category;

class AllProjects extends Component
{
    public $search = '';
    public $category='';
    public $status='';
    public function render()
    {
        // $projects = Project::paginate(4);
         $projects = Project::when($this->search,function($query, $search){
                return $query->where('title','LIKE',"%$this->search%");
         })->orderBy('id','DESC')->paginate(4);
        //  $projects->withPath('/projects');

        $categories = Category::all();
        $status= Project::select('publish_status')
            ->groupBy('publish_status')
            ->get();
       

        return view('livewire.admin.all-projects',['allprojects'=>$projects,'statuslist'=>$status,'categorylist'=>$categories]);
    }
}
