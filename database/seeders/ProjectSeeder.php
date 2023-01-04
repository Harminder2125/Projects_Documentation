<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->delete();
        $projects = array(
            array('title' => "Vehicle Management System",'abbreviation'=>'VMS','description'=>'VMS Description','group_id'=>1),
            array('title' => "Integrated Financial Management System",'abbreviation'=>'IFMS','description'=>'IFMS Description','group_id'=>1),
            array('title' => "Human Resource Management System",'abbreviation'=>'HRMS','description'=>'HRMS Description','group_id'=>1),
            array('title' => "Revnue Court Management System",'abbreviation'=>'RCMS','description'=>'RCMS Description','group_id'=>1),
            array('title' => "National Generic Document Registration System",'abbreviation'=>'NGDRS','description'=>'NGDRS Description','group_id'=>1),
            array('title' => "Court Case Monitoring System",'abbreviation'=>'CCMS','description'=>'CCMS Description','group_id'=>1),
            array('title' => "Mera Ghar Mere Naam",'abbreviation'=>'MGMN','description'=>'MGMN Description','group_id'=>1),
            array('title' => "Armed Licensed Issuance System",'abbreviation'=>'ALIS','description'=>'ALIS Description','group_id'=>1),

        );
        DB::table('projects')->insert($projects);
    }
}
