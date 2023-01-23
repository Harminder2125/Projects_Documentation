<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AssignRoleComponent extends Component
{
    public $projectHeads=[];
    public $searchterm="";
    public $users = [];
    public $openSearchModal = false;

    public function render()
    {
         $this->projectHeads = User::PrivelegedUsers()->get();
        //  $this->users = User::where('role_id','=',3)->get();
        $this->users = User::when($this->searchterm,function($query, $searchterm){
                return $query->where('role_id','=',3)->where('name','LIKE',"%$searchterm%");
         })->where('role_id','=',3)->get();
         
        return view('livewire.assign-role-component',[
            "hods"=>$this->projectHeads,
            "users"=>$this->users
        ]);
    }
    public function toggle($key)
    {
        if($key =="SearchModal")
        {
            $this->openSearchModal = ! $this->openSearchModal;
        }
    }
   
    public function removeHOD($id)
    {
        $temp = User::find($id);
        $temp->role_id = 3;
        $temp->save();
    }
     public function addHOD($id)
    {
        $temp = User::find($id);
        $temp->role_id = 4;
        $temp->save();
    }
    public function getNameInitials($value)
    {
        $words = explode(" ", $value);
        $acronym = "";
        foreach ($words as $w) {
            $acronym .= mb_substr($w, 0, 1);
        }
        return $acronym;
    }
    
}
