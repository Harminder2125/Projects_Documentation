<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Db;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_statuses')->delete();
        $status = array(
                    array('name' => "Published"),
                    array('name' => "Unpublished"),
                   
                );
        DB::table('project_statuses')->insert($status);
    }
}
