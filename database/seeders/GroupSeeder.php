<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->delete();
        $groups = array(
            array('code' => "IN",'name'=>'India'),
            array('code' => "PB",'name'=>'NIC Punjab'),
            array('code' => "HR",'name'=>'NIC Haryana'),
            array('code' => "HP",'name'=>'NIC Himachal Pradesh'),


        );
        DB::table('groups')->insert($groups);
    }
}
