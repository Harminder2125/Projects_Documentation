<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_privilege_mappings')->delete();
        $role_privilege = array(
                    array('role_id' => "1",'privilege_id'=>"1"),
                    array('role_id' => "1",'privilege_id'=>"2"),
                    array('role_id' => "1",'privilege_id'=>"3"),
                    array('role_id' => "1",'privilege_id'=>"4"), 
                   
                );
        DB::table('role_privilege_mappings')->insert($role_privilege);
    }
}
