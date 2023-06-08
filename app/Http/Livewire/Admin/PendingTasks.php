<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;

class PendingTasks extends Component
{
    public function render()
    {
        $projects = Project::where('Publish_status',1)->orWhere('Publish_status',2)->paginate(5);
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
