<?php

namespace App\Http\Livewire;
use App\Models\ManualContent;
use Livewire\Component;

class ManualComponent extends Component
{
    public $manual=[];
    public $manual_id = "";
    public function mount($id)
    {
        $this->manual_id = $id;
    }
    public function render()
    {
        $this->manual=ManualContent::where("manual_id","=",$this->manual_id)->where("parent_id","=",null)->get();
       
        return view('livewire.manual-component');
    }

    

    

    
}
