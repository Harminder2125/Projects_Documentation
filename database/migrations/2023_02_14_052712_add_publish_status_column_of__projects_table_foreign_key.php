<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->foreignId('publish_status')->constrained('project_statuses')->onDelete('restrict')->comment('Publish Status of Project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_publish_status_foreign');
            $table->dropColumn('publish_status');
        });
        
    }
};
