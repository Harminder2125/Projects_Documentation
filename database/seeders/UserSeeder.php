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
                    array('name' => "Mohammad Kashif",'email'=>'kashif@gmail.com','empcode'=>'7654','designation'=>'Assistant Director (IT)','mobile'=>'9888983081','password'=>Hash::make('12345678')),
                    array('name' => "Megha Singla",'email'=>'megha@gmail.com','empcode'=>'7655','designation'=>'Assistant Director (IT)','mobile'=>'9888983091','password'=>Hash::make('12345678')),
                    array('name' => "Gurpreet Singh",'email'=>'gurpreet@gmail.com','empcode'=>'7656','designation'=>'Assistant Director (IT)','mobile'=>'9888983061','password'=>Hash::make('12345678')),
                );
        DB::table('users')->insert($users);
    }
}
