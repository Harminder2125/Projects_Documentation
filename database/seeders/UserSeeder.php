<?php

namespace Database\Seeders;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = array(
            array('name' => "Harminder Singh",'email'=>'harminder.singh90@nic.in','empcode'=>'7653','designation'=>'Assistant Director (IT)','mobile'=>'9888983051','password'=>Hash::make('12345678')),
        );
        DB::table('users')->insert($users);
    }
}
