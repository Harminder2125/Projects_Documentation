<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivilegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privileges')->delete();
        $privileges = array(
                    array('name' => "view_project",'description'=>'To view the project','type'=>'2'),
                    array('name' => "create_project",'description'=>'To create project','type'=>'1'),
                    array('name' => "update_project",'description'=>'to edit changes in project','type'=>'2'),
                    array('name' => "delete_project",'description'=>'To delete project','type'=>'2'), 
                    array('name' => "view_user",'description'=>'To view all users','type'=>'1'),
                    array('name' => "create_user",'description'=>'To create new user','type'=>'1'),
                    array('name' => "update_user",'description'=>' To edit existing user','type'=>'1'),
                    array('name' => "delete_user",'description'=>'To debar user','type'=>'1'), 
                   
                );
        DB::table('privileges')->insert($privileges);
    }
}
