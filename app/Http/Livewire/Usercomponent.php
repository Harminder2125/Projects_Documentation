<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;


class Usercomponent extends Component
{
    public $searchUser;
    public $confirmingUserAddition = false;
    public $confirmingUserEditing = false;
    public $confirmingUserDeletion = false;

    public $edituser=[
        "id"=>"",
        "name"=>"",
        "email"=>"",
        "mobile"=>"",
        "designation"=>"",
        "empcode"=>"",
        "password"=>"",
        "password_confirmation"=>"",
    ];
    public $user=[
            "name"=>"",
        "email"=>"",
        "mobile"=>"",
        "designation"=>"",
        "empcode"=>"",
        "password"=>"",
        "password_confirmation"=>"",
        ];
   
    
    public function render()
    {
        $users = User::when($this->searchUser,function($query, $searchUser){
                return $query->where('name','LIKE',"%$this->searchUser%");
         })->orderBy('id','DESC')->paginate(6);
         $users->withPath('/users');

         $roles= Role::all();

        return view('livewire.usercomponent',[
            'allusers'=>$users,
            'roles'=>$roles
        ]);
    }
    public function toggle($key)
    {
        if($key == 'confirmingUserAddition')
            $this->confirmingUserAddition = !$this->confirmingUserAddition;
        else if($key =='confirmingUserEditing')
            $this->confirmingUserEditing = !$this->confirmingUserEditing;
        else if($key =='confirmingUserDeletion')
            $this->confirmingUserDeletion = !$this->confirmingUserDeletion;
        else
        {

        }
    }
    public function addUser()
    {
        Validator::make($this->user, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string', 'digits:10', 'unique:users','numeric'],
            'empcode'=> ['numeric','unique:users'],
            'password'=> ['required', 'string', 'confirmed', 'min:8'],
            
            // 'password' => $this->passwordRules(),
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        User::create($this->user);
        
        $this->toggle('confirmingUserAddition');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'New user added successfully!'
        ]);
      
        $this->emit('close-banner');
    }
    public function openUserForEditing($id)
    {
        
        $edituser = User::find($id);
        $this->edituser['id'] = $id;
        $this->edituser['name'] = $edituser->name;
        $this->edituser['email'] = $edituser->email;
        $this->edituser['mobile'] = $edituser->mobile;
        $this->edituser['designation'] = $edituser->designation;
        $this->edituser['empcode'] = $edituser->empcode;
       

        $this->toggle('confirmingUserEditing');
    }
    public function openUserForDeletion($id)
    {
        
        $edituser = User::find($id);
        $this->edituser['id'] = $id;
        $this->edituser['name'] = $edituser->name;
        $this->edituser['email'] = $edituser->email;
        $this->edituser['mobile'] = $edituser->mobile;
        $this->edituser['designation'] = $edituser->designation;
        $this->edituser['empcode'] = $edituser->empcode;
       

        $this->toggle('confirmingUserDeletion');
    }
    public function updateUser($id)
    {
        Validator::make($this->edituser, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'mobile' => ['required', 'string', 'digits:10', 'unique:users,mobile,'.$id,'numeric'],
            'empcode'=> ['numeric','unique:users,empcode,'.$id],
            
            // 'password' => $this->passwordRules(),
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user_update = User::find($id);
        $user_update->name = $this->edituser['name'];
        $user_update->email = $this->edituser['email'];
        $user_update->mobile = $this->edituser['mobile'];
        $user_update->designation = $this->edituser['designation'];
        $user_update->empcode = $this->edituser['empcode'];
        $user_update->save();
        
        $this->toggle('confirmingUserEditing');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'User details udated successfully!'
        ]);
      
        $this->emit('close-banner');
    }
    public function deleteUser($id)
    {
        
        $user_delete = User::find($id);
        $user_delete->delete();
        
        $this->toggle('confirmingUserDeletion');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'danger',
            'message' => 'User successfully deleted!'
        ]);
      
        $this->emit('close-banner');
    }
}
