<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ManualStaticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manual_statics')->delete();
        $manuals = array(
                    
                    array('title' => "title1",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => null,'position'=>"1"),
                    array('title' => "title2",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 1,'position'=>"2"),
                    array('title' => "title3",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 1,'position'=>"3"),
                    array('title' => "title4",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => 2,'position'=>"4"),
                    array('title' => "title5",'subtitle' => "subtitle1",'description' => "description1",'parent_id' => null,'position'=>"5"),
    );
    DB::table('manual_statics')->insert($manuals);
    }
}
