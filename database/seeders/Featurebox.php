<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Featurebox extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->delete();
        $onboard_requirements = array(
            array('project_id' => "1",'title' => "title1",'subtitle'=>"sub1",'position'=>"0"),
            array('project_id' => "1",'title' => "title2",'subtitle'=>"sub2",'position'=>"1"),
            array('project_id' => "1",'title' => "title3",'subtitle'=>"sub3",'position'=>"2"),
            array('project_id' => "2",'title' => "title4",'subtitle'=>"sub4",'position'=>"0"),
            array('project_id' => "2",'title' => "title5",'subtitle'=>"sub5",'position'=>"1"),
            array('project_id' => "3",'title' => "title5",'subtitle'=>"sub5",'position'=>"0"),
        );
DB::table('featurebox')->insert($onboard_requirements);
    }
}
