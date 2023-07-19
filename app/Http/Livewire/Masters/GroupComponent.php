<?php

namespace App\Http\Livewire\Masters;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Group;

class GroupComponent extends Component
{
    public $searchGroup="";
    public $editmode = false;
    public $confirmingGroupDeletion = false;
    public $group=[
    "id"=>"",
    "name"=>"",
    "code"=>""
   ];
   
    public function render()
    {
        $groups = Group::when($this->searchGroup,function($query, $searchGroup){
            return $query->where('name','LIKE',"%$this->searchGroup%");
     })->orderBy('id','DESC')->paginate(6);
     $groups->withPath('/masters/group');
        return view('livewire.masters.group-component',[
            'allgroups'=>$groups,
        ]);
    }
    public function toggle($key)
    {
        if($key == "Deletion")
            $this->confirmingGroupDeletion = !$this->confirmingGroupDeletion;
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
        $this->group=[
            "id"=>"",
            "name"=>"",
            "code"=>""
        ];
    }
     public function openGroupForEditing($id)
    {
        
        $editgroup = Group::find($id);
        $this->group['id'] = $editgroup->id;
        $this->group['name'] = $editgroup->name;
        $this->group['code'] = $editgroup->code;
        $this->editmode = true;
 
    }
    public function cancelEditMode()
    {
        $this->editmode = false;
        $this->group=["id"=>"","name"=>"","code"=>"",];
    }
    public function updateGroup($id)
    {
        Validator::make($this->group, [
            'name' => ['required', 'string', 'max:255'],
            'code'=>['required','string','unique:groups,code,'.$id]
        ])->validate();
        
        $group_update = Group::find($id);
        $group_update->name = $this->group['name'];
        $group_update->code = $this->group['code'];
       
        $group_update->save();
      
    
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Group details successfully updated!'
        ]);
      
        $this->emit('close-banner');
        $this->editmode = false;
    }
     public function openGroupForDeletion($id)
    {
       
        $editgroup = Group::find($id);
       
        $this->group['id'] = $id;
        $this->group['name'] = $editgroup->name;
        $this->group['code'] = $editgroup->code;
       
        $this->toggle('Deletion');

    }
     public function deleteGroup($id)
    {
      
        $group_delete = Group::find($id);
        $group_delete->delete();
     
        $this->toggle('Deletion');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'danger',
            'message' => 'Group successfully deleted!'
        ]);
      
        $this->emit('close-banner');
    }

}
