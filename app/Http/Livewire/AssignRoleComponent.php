<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AssignRoleComponent extends Component
{
    public $projectHeads=[];
    public $users=[];
    public $hod=[];
   

    public function mount()
    {
        $this->users = User::all();
        foreach($this->users as $user)
        {
            if($user->role_id == 4)
            {
                array_push($this->projectHeads, $user->id);

            }
        }
        
    }

    public function render()
    {
        
        return view('livewire.assign-role-component',[
            "users"=>$this->users
        ]);
    }
   
    public function update($id)
    {
       $role_id = array_search($id,$this->projectHeads)?4:3;
       $temp = User::find($id);
     
       $temp->role_id =$role_id;
       
        
       $temp->save();
       
    }
    
}
