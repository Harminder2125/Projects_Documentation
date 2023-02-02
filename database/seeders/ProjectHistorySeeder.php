<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProjectHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $history = array(
                    array('project_id'=>1,'action_performed' => "CREATED",'action_description' => "",'first_user_id' => 1,'second_user_id'=>null),
                    array('project_id'=>1,'action_performed' => "SUBMITTED",'action_description' => "",'first_user_id' => 1,'second_user_id'=>2),
                    array('project_id'=>1,'action_performed' => "REJECTED",'action_description' => "",'first_user_id' => 2,'second_user_id'=>1),
                    array('project_id'=>1,'action_performed' => "SUBMITTED",'action_description' => "",'first_user_id' => 1,'second_user_id'=>2),
                    array('project_id'=>1,'action_performed' => "APPROVED",'action_description' => "",'first_user_id' => 2,'second_user_id'=>3),
                    array('project_id'=>1,'action_performed' => "PUBLISHED",'action_description' => "",'first_user_id' => 3,'second_user_id'=>null),
                );
                 DB::table('project_histories')->insert($history);
    }
}
