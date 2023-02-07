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
        Schema::create('featureboxentries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('featurebox_id')->constrained('featureboxes')->onDelete('restrict');;
            $table->string('title',200);
            $table->string('description',300);
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
        Schema::dropIfExists('featureboxentries');
    }
};
