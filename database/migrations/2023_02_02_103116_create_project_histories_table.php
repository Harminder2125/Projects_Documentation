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
        Schema::create('project_histories', function (Blueprint $table) {
            $table->id();
            $table->string('action_performed',30);
            $table->string('action_description',250)->nullable();
            $table->foreignId('first_user_id')->constrained('users')->onDelete('restrict');
            $table->foreignId('second_user_id')->constrained('users')->onDelete('restrict')->nullable();
            $table->foreignId('project_id')->constrained('projects')->onDelete('restrict');


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
        Schema::dropIfExists('project_histories');
    }
};
