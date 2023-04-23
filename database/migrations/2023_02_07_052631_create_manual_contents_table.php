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
        Schema::create('manual_contents', function (Blueprint $table) {
             $table->id();
            $table->foreignId('manual_id')->constrained('manuals')->onDelete('restrict')->comment('To which manual this content belongs to ');
            
            $table->string('title',150);
            $table->string('subtitle',250)->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('manual_contents')->onDelete('restrict')->comment('there are Indicies under it');
            $table->integer('position');
            $table->tinyInteger('static')->default('0');
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
        Schema::dropIfExists('manual_contents');
    }
};
