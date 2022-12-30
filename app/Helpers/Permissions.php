<?php 
namespace App\Providers;
use Session;

class Permissions{

    static function addPermissionsToSession($key, $value)
    {
        $permissions = [];
        foreach($value as $per)
        {
           $temp = [
                'role_id' => $per->role_id,
                'group_id'=> $per->group_id,
                'role'=> $per->rolename()->first()->name,
                'group'=> $per->groupname()->first()->name,
           ];
           array_push($permissions,$temp);
        }
        Session::put($key,$permissions);
    }

    static function mainRole()
    {
        // This function selects highest role SUPERADMIN > ADMIN > USER
        $role_id = 3;  
        $role_name = "User";
        $group_name = "GROUP NOT SET";
        $permissions = Session::get('permissions');
        foreach($permissions as $per)
        {
            if($per['role_id'] <= $role_id)
            {
                $role_id = $per['role_id'];
                $role_name = $per['role'];
                $group_name = $per['group'];
            }
        }
        return ["role_id"=>$role_id, "role"=>$role_name,"group"=>$group_name];
    }

}


?>