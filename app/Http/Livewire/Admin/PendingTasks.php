<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;

class PendingTasks extends Component
{
    public function render()
    {
        $projects = Project::where(function ($query) {
                        $query->where('publish_status', 2)
                                ->orWhere('publish_status', 1);
        })->paginate(5);
      
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
