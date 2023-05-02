<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\EventsVisibleto;
use Livewire\Component;

class Notifications extends Component
{
    public $newnotifications=[];
    public function render()
    {
        $this->newnotifications=EventsVisibleto::where('seen','=',0)->where('user_id','=',Auth::user()->id)->get();
        
        
        return view('livewire.notifications');
    }
}
