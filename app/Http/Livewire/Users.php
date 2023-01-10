<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $searchUser;
    public function render()
    {
        $users = User::when($this->searchUser,function($query, $searchUser){
                return $query->where('name','LIKE',"%$this->searchUser%");
         })->paginate(2);

        return view('livewire.users',[
            'allusers'=>$users
        ]);
    }
}
