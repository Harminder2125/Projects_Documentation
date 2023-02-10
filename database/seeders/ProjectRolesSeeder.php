<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_roles')->delete();
        $projectroles = array(
                    array('name' => "Team Leader",),
                    array('name' => "Team Member",),
                );
        DB::table('project_roles')->insert($projectroles);
    }
}
