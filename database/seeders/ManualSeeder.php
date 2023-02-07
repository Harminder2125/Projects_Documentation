<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manuals')->delete();
        $manuals = array(
                    array('project_id' => 1,'title' => "title1",'version' => "1.0.0",'staging_server_url' => "https://abc.com/wer",'major_changes' => "new module addded",'has_document_manual'=>null,'has_video_manual'=>null),
                    array('project_id' => 1,'title' => "title2",'version' => "1.0.1",'staging_server_url' => "https://abc.com/wer/version=1.0.2",'major_changes' => "one more module addded",'has_document_manual'=>null,'has_video_manual'=>null),
                ); 
        DB::table('manuals')->insert($manuals);
    }
}
