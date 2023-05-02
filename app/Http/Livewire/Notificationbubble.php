<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EventsVisibleto;
use Illuminate\Support\Facades\Auth;
class Notificationbubble extends Component
{
    public $newnotifications=[];
    public $count=0;
    public function render()
    {
        $this->newnotifications=EventsVisibleto::where('seen','=',0)->where('user_id','=',Auth::user()->id)->get();
        
        $this->count=count($this->newnotifications);
        return view('livewire.notificationbubble');
    }
}
