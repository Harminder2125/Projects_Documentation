<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('restrict')->comment('project has manual in it');
            
            $table->string('title',150);
            $table->string('version',20)->nullable();
            $table->string('staging_server_url',500)->nullable();
            $table->longText('major_changes')->nullable();
            $table->string('has_document_manual',500)->nullable()->comment('If user has uploaded pdf manual then its path');
            $table->string('has_video_manual',500)->nullable()->comment('If user has youtube video manual then its link');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     */

   
    public function down()
    {
        Schema::dropIfExists('manuals');
    }
};
