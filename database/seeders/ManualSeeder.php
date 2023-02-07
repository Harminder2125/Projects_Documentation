<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manuals')->delete();
        $manuals = array(
                    
                    array('project_id' => 1,'title' => "title1",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => null,'position'=>"1"),
                    array('project_id' => 1,'title' => "title2",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 1,'position'=>"2"),
                    array('project_id' => 1,'title' => "title3",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 2,'position'=>"3"),
                    array('project_id' => 1,'title' => "title4",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => null,'position'=>"4"),
                    array('project_id' => 1,'title' => "title5",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 4,'position'=>"5"),
                    array('project_id' => 1,'title' => "title6",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 5,'position'=>"6"),
                    array('project_id' => 1,'title' => "title7",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 6,'position'=>"7"),
                    array('project_id' => 1,'title' => "title8",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => null,'position'=>"8"),
                    array('project_id' => 1,'title' => "title9",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 8,'position'=>"9"),
                    array('project_id' => 1,'title' => "title10",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 8,'position'=>"10"),
                    array('project_id' => 1,'title' => "title11",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 10,'position'=>"11"),
                    array('project_id' => 1,'title' => "title12",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 11,'position'=>"12"),
                    array('project_id' => 1,'title' => "title13",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 12,'position'=>"13"),
                    array('project_id' => 1,'title' => "title10",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 9,'position'=>"14"),
                    array('project_id' => 1,'title' => "title11",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 9,'position'=>"15"),
                    array('project_id' => 1,'title' => "title12",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 11,'position'=>"16"),
                    array('project_id' => 1,'title' => "title13",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 12,'position'=>"17"),
                ); 
        DB::table('manuals')->insert($manuals);
    }
}
