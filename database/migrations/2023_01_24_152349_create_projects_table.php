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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('abbreviation',20)->nullable();
            $table->text('description',8000)->nullable();
            $table->string('category',50)->nullable();
            $table->string('live_url',150)->nullable();
            $table->date('launch_date')->nullable();
            $table->string('publish_status',20)->nullable();
            $table->string('launched_by',100)->nullable();
            // $table->foreignId('head_user_id')->constrained('users')->onDelete('restrict')->comment('Project Head');
            $table->foreignId('division_id')->constrained('divisions')->onDelete('restrict')->comment('Division to which this project is alloted');
            $table->string('thumbnail_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
