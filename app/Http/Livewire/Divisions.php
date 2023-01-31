<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Division;
use App\Models\User;

class Divisions extends Component
{
    public $searchDivision;
    public $userlist=[];
    public $confirmingDivisionAddition=false,$confirmingDivisionEditing=false,$confirmingDivisionDeletion=false;
    public $division=[
        "name"=>"",
        "group_id"=>2
    ]; 
    public $editdivision=[
        "id"=>"",
        "name"=>"",
        "group_id"=>2
    ]; 

    public function mount(){
        $users=User::where("role_id","=",3)->get(['id','name'])->toArray();
        // foreach($users as $user)
        // {
        //     $this->userlist[]=array(,$user['name']);
        // }    
        $this->userlist=$users;
        //dd($this->userlist);
    }

    public function render()
    {   $divisions=Division::when($this->searchDivision,function($query, $searchDivision){
        return $query->where('name','LIKE',"%$this->searchDivision%");
        })->orderBy('id','DESC')->paginate(5);

        $divisions->withPath('/divisions');

        return view('livewire.divisions',[
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
        $this->editdivision['name']=$name;
        $this->editdivision['id']=$id;
        $this->toggle('confirmingDivisionEditing');

    } 
    public function updateDivision(){
        Validator::make($this->editdivision, [
            'name' => ['required', 'string', 'max:150'],
        ])->validate();
        $division=Division::find($this->editdivision['id']);
        $division->name=$this->editdivision['name'];
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
        $this->editdivision['name']=$name;
        $this->editdivision['id']=$id;
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
