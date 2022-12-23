<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        $roles = array(
            array('name' => "Super Admin"),
            array('name' => "Admin",),
            array('name' => "Project Head"),
            array('name' => "Team Leader"),
            array('name' => "Team Member"),
            array('name'=>"User"),
        );
        DB::table('roles')->insert($roles);

    }
}
