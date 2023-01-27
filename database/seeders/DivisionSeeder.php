<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('divisions')->delete();
        $divisions = array(
                    array('name' => "Div1",'group_id' => "2"),
                    array('name' => "Div2",'group_id' => "2"),
                    array('name' => "Div3",'group_id' => "2"),
                    array('name' => "Div4",'group_id' => "2"),
                    array('name' => "Div5",'group_id' => "2"),
                );
        DB::table('divisions')->insert($divisions);
    }
}
