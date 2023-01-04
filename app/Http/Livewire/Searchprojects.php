<?php

namespace App\Http\Livewire;
use App\Models\Project;
use Livewire\Component;

class Searchprojects extends Component
{
    //use WithPagination;    // used for ajax pagination
   
    public function render()
    {
        $projects = Project::all();
        return view('livewire.searchprojects',[
            'projects'=>$projects
        ]);
    }
}
