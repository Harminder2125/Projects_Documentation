<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $onboard_requirements = array(
            array('project_id' => "3",'title' => "Hardware Requirements",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "3",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"3",'icon'=>"a"),
            array('project_id' => "3",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "3",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "3",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "3",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "3",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"manual"),

            array('project_id' => "2",'title' => "Hardware Requirements",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "2",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"3",'icon'=>"a"),
            array('project_id' => "2",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "2",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "2",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "2",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "2",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"manual"),
           

            array('project_id' => "3",'title' => "Hardware Requirements",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "3",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"1",'icon'=>"a"),
            array('project_id' => "3",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "3",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "3",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "3",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "3",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"manual"),

            array('project_id' => "4",'title' => "Hardware Requirements",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "4",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"1",'icon'=>"a"),
            array('project_id' => "4",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "4",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "4",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "4",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "4",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"manual"),
       
            array('project_id' => "5",'title' => "Hardware Requirements",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "5",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"1",'icon'=>"a"),
            array('project_id' => "5",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "5",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "5",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "5",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "5",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"manual"),

            array('project_id' => "6",'title' => "Hardware Requirements",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "6",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"1",'icon'=>"a"),
            array('project_id' => "6",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "6",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "6",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "6",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "6",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"manual"),

            array('project_id' => "7",'title' => "Hardware Requirements",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "7",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"1",'icon'=>"a"),
            array('project_id' => "7",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "7",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "7",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "7",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "7",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"manual"),

            array('project_id' => "8",'title' => "Hardware Requirements",'subtitle'=>"Hardware and software requirement for running",'position'=>"0",'icon'=>"settings"),
            array('project_id' => "8",'title' => "PROJECT ONBOARDING",'subtitle'=>"STEPS TO FOLLOW FOR ONBOARDING",'position'=>"1",'icon'=>"a"),
            array('project_id' => "8",'title' => "PROJECT PRELIMINARY SETUP",'subtitle'=>"SETTINGS",'position'=>"2",'icon'=>"b"),
            array('project_id' => "8",'title' => "STAGING SERVER",'subtitle'=>"DETAILS OF STAGING SERVER",'position'=>"3",'icon'=>"c"),
            array('project_id' => "8",'title' => "LIVE SERVER",'subtitle'=>"DETAILS OF LIVE SERVER",'position'=>"4",'icon'=>"d"),
            array('project_id' => "8",'title' => "MOBILE APPLICATION",'subtitle'=>"ANDROID/IOS",'position'=>"5",'icon'=>"e"),
            array('project_id' => "8",'title' => "COMPLETE PROJECT MANUAL",'subtitle'=>"LIST OF ALL THE MANUALS",'position'=>"6",'icon'=>"manual"),


           
        );
DB::table('featureboxes')->insert($onboard_requirements);
    }
}
