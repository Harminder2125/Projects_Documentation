<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectrolePrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projectrole_privilege_mappings')->delete();
        $projectrole_privilege_mappings = array(
                    array('projectrole_id' => "1",'privilege_id'=>"1"),
                    array('projectrole_id' => "1",'privilege_id'=>"2"),
                    array('projectrole_id' => "1",'privilege_id'=>"3"),
                    array('projectrole_id' => "1",'privilege_id'=>"4"), 
                   
                );
        DB::table('projectrole_privilege_mappings')->insert($projectrole_privilege_mappings);
    }
}
