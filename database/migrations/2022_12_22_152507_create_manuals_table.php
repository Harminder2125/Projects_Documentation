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
            $table->string('subtitle',250)->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('manuals')->onDelete('restrict')->comment('there are Incices under it');
            $table->integer('position');
           
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
