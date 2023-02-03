<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Featureboxentries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $onboard_entries = array(
            array('featurebox_id' => "1",'title' => "Password requirements:",'description'=>"Windows 10/Server 2019",'position'=>0),
            array('featurebox_id' => "1",'title' => "Password requirements:",'description'=>"4GB ram and 2GB disk Space",'position'=>1),
            array('featurebox_id' => "1",'title' => "Password requirements:",'description'=>".NET Framework 4.8",'position'=>2),
            array('featurebox_id' => "2",'title' => "title1",'description'=>"Windows 10/Server 2019",'position'=>3),
            
        );
DB::table('featureboxentries')->insert($onboard_entries);
    }
}
