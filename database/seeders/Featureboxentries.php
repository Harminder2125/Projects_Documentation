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
            array('featurebox_id' => "1",'title' => "title1",'description'=>"description1",'position'=>0),
            array('featurebox_id' => "1",'title' => "title1",'description'=>"description1",'position'=>1),
            array('featurebox_id' => "1",'title' => "title1",'description'=>"description1",'position'=>2),
            array('featurebox_id' => "2",'title' => "title1",'description'=>"description1",'position'=>3),
            
        );
DB::table('featureboxentries')->insert($onboard_entries);
    }
}
