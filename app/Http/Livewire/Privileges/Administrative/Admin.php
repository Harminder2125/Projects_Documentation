<?php

namespace App\Http\Livewire\Privileges\Administrative;

use Livewire\Component;
use App\Models\privileges;
use App\Models\role_privilege_mapping;
use Auth;

class Admin extends Component
{
    public $editmode = false;
    public $privileges = null;
  
    public $mappedPrivileges = null;
    public $role;

   public function mount($role_id)
   {
    $this->role =  $role_id;
    $this->loadprivileges();
    $this->loadMappedPrivileges();
   
   }

   public function render()
   {
       return view('livewire.privileges.administrative.admin');
   }

   public function loadPrivileges()
   {
       $this->privileges = privileges::where('type',1)->get();
   }
    public function loadMappedPrivileges()
   {
       $mapped= role_privilege_mapping::where('role_id',$this->role)->get();
       $setOfIds = $mapped->pluck('privilege_id')->toArray();
       $this->mappedPrivileges = array_fill_keys($setOfIds, true);
   }
   public function cancelEdit()
   {
    $this->toggle('edit');
   
   $this->loadMappedPrivileges();
    
   
   }
   public function savePrivileges()
   {
        
        $current = role_privilege_mapping::where('role_id',$this->role)->delete();
        foreach($this->mappedPrivileges as $key=>$prv)
        {   if($prv){
            $rpmapping = new role_privilege_mapping();
            $rpmapping->role_id = $this->role;
            $rpmapping->privilege_id = $key;
            $rpmapping->save();
        }
 
            
        }
        $this->emit('saved');
        $this->toggle('edit');
   }
   
    
    public function toggle($key)
    {
        if($key =="edit")
        {
            $this->editmode = !$this->editmode;
        }
    }
}
