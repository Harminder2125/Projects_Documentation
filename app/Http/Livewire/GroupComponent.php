<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Group;

class GroupComponent extends Component
{
    public $searchGroup="";
    public $refresh = false;

    public $group=[
    "name"=>"",
    "code"=>""
   ];
   public function toggle($key)
   {

    // if($key =="refresh")
        $this->refresh = !$this->refresh;

   }
    public function render()
    {
        $groups = Group::when($this->searchGroup,function($query, $searchGroup){
            return $query->where('name','LIKE',"%$this->searchGroup%");
     })->orderBy('id','DESC')->paginate(6);
     $groups->withPath('/groups');
        return view('livewire.group-component',[
            'allgroups'=>$groups,
        ]);
    }
    public function addGroup()
    {
        Validator::make($this->group, [
            'name' => ['required', 'string', 'max:255'],
            'code'=>['required','string','unique:groups']
        ])->validate();
        
        Group::create($this->group);
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'New state / group added successfully!'
        ]);
      
        $this->emit('close-banner');
        $this->toggle('refresh');
    }
}
