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
        Schema::create('events_visibletos', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('event_id')->constrained('events')->onDelete('restrict')->comment('there are Indicies under it');
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict')->comment('there are events visibility assigned under it');;
            $table->tinyInteger('seen')->default('0');
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
        Schema::dropIfExists('events_visibletos');
    }
};
