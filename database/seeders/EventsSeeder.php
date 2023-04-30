<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = array(
            array('payload' => "Admin has created Project VMS"),
            array('payload' => "Admin has created Project HRMS"),
            array('payload' => "Admin has created Project PFMS"),
            array('payload' => "Admin has has assigned Gurpreet Singh as Project Head on  Project VMS"),
            
        );
DB::table('events')->insert($events);
    }
    
}
