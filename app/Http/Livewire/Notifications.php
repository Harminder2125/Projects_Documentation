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
        $this->newnotifications=EventsVisibleto::where('user_id','=',Auth::user()->id)
        ->orderBy("id","desc")->get();
        return view('livewire.notifications');
    }

    public function onseen($id)
    {
        $visibleto = EventsVisibleto::find($id);
        $visibleto->seen='1';
        $visibleto->save();
     
        
        $this->emit('refreshComponent');
    }
}
