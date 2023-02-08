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
                    array('name' => "Harminder Singh",'email'=>'harminder.singh90@nic.in','empcode'=>'7653','designation'=>'Assistant Director (IT)','mobile'=>'9888983051','password'=>Hash::make('12345678'),'role_id'=>1,'group_id'=>2),
                    array('name' => "Mohammad Kashif",'email'=>'kashif@gmail.com','empcode'=>'7654','designation'=>'Assistant Director (IT)','mobile'=>'9888983081','password'=>Hash::make('12345678'),'role_id'=>2,'group_id'=>2),
                    array('name' => "Megha Singla",'email'=>'megha@gmail.com','empcode'=>'7655','designation'=>'Assistant Director (IT)','mobile'=>'9888983091','password'=>Hash::make('12345678'),'role_id'=>3,'group_id'=>2),
                    array('name' => "Gurpreet Singh",'email'=>'gurpreet@gmail.com','empcode'=>'7656','designation'=>'Assistant Director (IT)','mobile'=>'9888983061','password'=>Hash::make('12345678'),'role_id'=>3,'group_id'=>2),
                    array('name' => "Pritpal Singh",'email'=>'pritpal@gmail.com','empcode'=>'7615','designation'=>'Assistant Director (IT)','mobile'=>'9888989091','password'=>Hash::make('12345678'),'role_id'=>3,'group_id'=>2),
                    array('name' => "Sunny Sharma",'email'=>'sunny@gmail.com','empcode'=>'8606','designation'=>'Assistant Director (IT)','mobile'=>'7898983061','password'=>Hash::make('12345678'),'role_id'=>3,'group_id'=>2),
                    array('name' => "Manpreet Singh",'email'=>'manpreet@gmail.com','empcode'=>'9655','designation'=>'Assistant Director (IT)','mobile'=>'6888983091','password'=>Hash::make('12345678'),'role_id'=>3,'group_id'=>2),
                    array('name' => "Deepak Saini",'email'=>'deepak@gmail.com','empcode'=>'5656','designation'=>'Assistant Director (IT)','mobile'=>'5888983061','password'=>Hash::make('12345678'),'role_id'=>3,'group_id'=>2),
                    array('name' => "Baljinder Singh",'email'=>'baljinder@gmail.com','empcode'=>'4615','designation'=>'Assistant Director (IT)','mobile'=>'4888989091','password'=>Hash::make('12345678'),'role_id'=>3,'group_id'=>2),
                    array('name' => "Rahul",'email'=>'rahul@gmail.com','empcode'=>'3606','designation'=>'Assistant Director (IT)','mobile'=>'3898983061','password'=>Hash::make('12345678'),'role_id'=>3,'group_id'=>2),
                );
        DB::table('users')->insert($users);
    }
}
