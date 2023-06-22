<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RemarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('remarks')->delete();
        $remarks = array(
            array('project_id' => 1,'user_id'=>1,'remarks'=>"sending back"),
           

        );
        DB::table('remarks')->insert($remarks);
    }
}
