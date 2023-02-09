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
        Schema::create('project_team_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('restrict')->comment('Has team members');
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict')->comment('is a team member of a project');
            $table->foreignId('projectrole_id')->constrained('project_roles')->onDelete('restrict')->comment('A team member has this role');
            $table->timestamps();
            $table->unique(['project_id', 'user_id','projectrole_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_team_members');
    }
};
