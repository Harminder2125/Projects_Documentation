<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Division;

class Divisions extends Component
{
    
   
    public function render()
    {

      
      $divisions=Division::paginate(2);
       
       
       return view('livewire.divisions')->with('divisions',$divisions);
            
        
    }

    public function view()
    {
       $divisions=Division::with('divisions.groups')->all();
       $data=compact('divisions');
       return view('livewire.divisions')->with($data);
    }
}
