<?php

namespace App\Http\Livewire\Priveleges\Administrative;

use Livewire\Component;

class Admin extends Component
{
    public $editmode = false;

    public function render()
    {
        return view('livewire.priveleges.administrative.admin');
    }
    
    public function toggle($key)
    {
        if($key =="edit")
        {
            $this->editmode = !$this->editmode;
        }
    }
}
