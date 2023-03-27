<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTeamMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('project_team_members')->delete();
        $project_team_members = array(
                    array('project_id' => "1",'user_id'=>"1",'projectrole_id'=>"1"),
                    array('project_id' => "1",'user_id'=>"2",'projectrole_id'=>"2"),
                    array('project_id' => "1",'user_id'=>"3",'projectrole_id'=>"3"),
                    array('project_id' => "1",'user_id'=>"4",'projectrole_id'=>"3"),
                    array('project_id' => "1",'user_id'=>"5",'projectrole_id'=>"3"),
                    array('project_id' => "1",'user_id'=>"6",'projectrole_id'=>"3"),

                    
                );
        DB::table('project_team_members')->insert($project_team_members);
    }
    }

