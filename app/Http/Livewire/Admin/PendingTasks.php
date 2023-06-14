<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;
use Livewire\WithPagination;

class PendingTasks extends Component
{
    use WithPagination;
    public function render()
    {
        $projects = Project::whereIn('publish_status', [1, 2])->paginate(5);
         $projects->withPath('/dashboard');
      
        return view('livewire.admin.pending-tasks',['projects'=>$projects]);
    }
     public function getNameInitials($value)
    {
        $words = explode(" ", $value);
        $acronym = "";
        foreach ($words as $w) {
            $acronym .= mb_substr($w, 0, 1);
        }
        return $acronym;
    } 
}
