<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();
        $permissions = array(
            array('user_id' => 1, 'role_id'=>1, 'group_id'=>1),
        );
        DB::table('permissions')->insert($permissions);

    }
}
