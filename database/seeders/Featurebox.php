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
            array('project_id' => "1",'title' => "Hardware Requirements",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "1",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"1",'icon'=>"a"),
            array('project_id' => "1",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "1",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "1",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "1",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "1",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"f"),

            array('project_id' => "2",'title' => "Hardware Requirements2",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "2",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"2",'icon'=>"a"),
            array('project_id' => "2",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "2",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "2",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "2",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "2",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"f"),
       
        );
DB::table('featureboxes')->insert($onboard_requirements);
    }
}
