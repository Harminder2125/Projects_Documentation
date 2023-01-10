<?php

namespace App\Http\Livewire;
use App\Models\Project;
use Livewire\Component;

class Searchprojects extends Component
{
    public $searchTerm="";
    //use WithPagination;    // used for ajax pagination
   
    public function render()
    {
        
        $projects = Project::when($this->searchTerm,function($query, $searchTerm){
                return $query->where('title','LIKE',"%$this->searchTerm%");
         })->paginate(6);
        // $projects = Project::where('title','LIKE',"%$this->searchTerm%")->paginate(6);

        return view('livewire.searchprojects',[
            'projects'=>$projects
        ]);
    }
}
