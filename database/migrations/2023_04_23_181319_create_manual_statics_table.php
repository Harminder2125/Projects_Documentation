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
        Schema::create('manual_statics', function (Blueprint $table) {
            $table->id();
           
            
            $table->string('title',150);
            $table->string('subtitle',250)->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('manual_contents')->onDelete('restrict')->comment('there are Indicies under it');
            $table->integer('position');
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
        Schema::dropIfExists('manual_statics');
    }
};
