<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsVisibletoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventsvisibleto = array(
            array('event_id' => 1,'user_id'=>1),
            array('event_id' => 1,'user_id'=>2),  
            array('event_id' => 1,'user_id'=>3),
            array('event_id' => 1,'user_id'=>4),
            array('event_id' => 4,'user_id'=>4),
            array('event_id' => 4,'user_id'=>1),

        );
DB::table('events_visibletos')->insert($eventsvisibleto);
    }
}
