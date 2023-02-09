<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Divisions extends Component
{
    public function render()
    {
        return view('livewire.divisions');
    }
    
   
        
    
    public function addDivision(){
        Validator::make($this->division, [
            'name' => ['required', 'string', 'max:150'],
            'user_id'=>['required', 'integer']
           
        ])->validate();
        $this->division['group_id']=Auth::user()->group_id;
        Division::create($this->division);
        
        $this->toggle('confirmingDivisionAddition');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'New Division added successfully!'
        ]);
      
        $this->emit('close-banner');
    }
    public function editDivision($id){
        
        $name=Division::find($id)->name;
        $user_id=Division::find($id)->user_id;
        $this->editdivision['name']=$name;
        $this->editdivision['id']=$id;
        $this->editdivision['user_id']=$user_id;
        $this->toggle('confirmingDivisionEditing');

    } 
    public function updateDivision(){
        Validator::make($this->editdivision, [
            'name' => ['required', 'string', 'max:150'],
            'user_id'=>['required', 'integer']
        ])->validate();
        $division=Division::find($this->editdivision['id']);
        $this->authorize('update',$division);
        $division->name=$this->editdivision['name'];
        $division->user_id=$this->editdivision['user_id'];
        $division->save();
        $this->toggle('confirmingDivisionEditing');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Division Details Updated successfully!'
        ]);
      
        $this->emit('close-banner');

    }

    public function deleteDivision($id){
        $name=Division::find($id)->name;
        $user_id=Division::find($id)->user_id;
        $this->editdivision['name']=$name;
        $this->editdivision['id']=$id;
        $this->editdivision['user_id']=$user_id;
        $this->toggle('confirmingDivisionDeletion');
    }
    public function delete(){

        $division=Division::find($this->editdivision['id']);
        $division->delete();
        $this->toggle('confirmingDivisionDeletion');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'danger',
            'message' => 'Division Details Deleted successfully!'
        ]);
      
        $this->emit('close-banner');

    }
    
}
