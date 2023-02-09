<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Division;
use App\Models\User;

class ManageDivisions extends Component
{
    public $searchDivision;
    public $userlist=[];
    public $confirmingDivisionAddition=false,$confirmingDivisionEditing=false,$confirmingDivisionDeletion=false;
    public $division=[
        "name"=>"",
        "group_id"=>2,
        "user_id"=>""
    ]; 
    public $editdivision=[
        "id"=>"",
        "name"=>"",
        "group_id"=>2,
        "user_id"=>""
    ]; 

    public function mount(){
        $this->userlist=User::where("role_id","=",3)->get(['id','name'])->toArray();
        
    }

    public function render()
    {   $divisions=Division::when($this->searchDivision,function($query, $searchDivision){
        return $query->where('name','LIKE',"%$this->searchDivision%");
        })->orderBy('id','DESC')->paginate(5);

        $divisions->withPath('/divisions');

        return view('livewire.manage-divisions',[
            'divisions'=>$divisions,
        ]);
        
    }
    public function toggle($key){
       
     if($key == 'confirmingDivisionAddition')
     {
        $this->confirmingDivisionAddition = !$this->confirmingDivisionAddition;
     }
    else if($key =='confirmingDivisionEditing')
    {
        $this->confirmingDivisionEditing = !$this->confirmingDivisionEditing;

    }
    else if($key =='confirmingDivisionDeletion')
    {
        $this->confirmingDivisionDeletion = !$this->confirmingDivisionDeletion;
    }
    else
    {

    }
        
    }
    public function addDivision(){
        Validator::make($this->division, [
            'name' => ['required', 'string', 'max:150'],
            'user_id'=>['required', 'integer']
           
        ])->validate();
        $this->division['group_id']=Auth::user()->group_id;
        Division::create($this->division);

        //Changing role-id of user from 3 to 4
        $user = User::find($this->division['user_id']);
        $user->role_id = 4;
        $user->save();
        //Changed role-id of user from 3 to 4

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
        
        //Changing role-id of user from 3 to 4
        if($this->editdivision['user_id'] != $division->user_id)
        {
            $user1 = User::find($this->editdivision['user_id']);
            $user1->role_id = 4;
            $user1->save();
            
            $user2 = User::find($division->user_id);
            $user2->role_id = 3;
            $user2->save();
        }
        
        //Changed role-id of user from 3 to 4


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
        //Changing role-id of user from 4 to 3
       
            
            $user2 = User::find($division->user_id);
            $user2->role_id = 3;
            $user2->save();
       
        //Changed role-id of user from 3 to 4


        $division->delete();
        $this->toggle('confirmingDivisionDeletion');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'danger',
            'message' => 'Division Details Deleted successfully!'
        ]);
      
        $this->emit('close-banner');

    }
    
}
