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
                    array('name' => "view_project"),
                    array('name' => "create_project"),
                    array('name' => "update_project"),
                    array('name' => "delete_project"), 
                    array('name' => "view_user"),
                    array('name' => "create_user"),
                    array('name' => "update_user"),
                    array('name' => "delete_user"), 
                   
                );
        DB::table('privileges')->insert($privileges);
    }
}
