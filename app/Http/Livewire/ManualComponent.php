<?php

namespace App\Http\Livewire;
use App\Models\Manual;
use Livewire\Component;

class ManualComponent extends Component
{
    public $manual=[];
    public function render()
    {
        $this->manual=Manual::where("project_id","=",1)->where("parent_id","=",null)->get();
       
        return view('livewire.manual-component');
    }

    

    

    
}
