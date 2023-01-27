<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $categories = array(
                    array('name' => "Finance"),
                    array('name' => "Transport"),
                    array('name' => "Health"),
                    array('name' => "General Administration"),
                    array('name' => "Police"),
                );
        DB::table('categories')->insert($categories);
    }
}
