<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classments', function (Blueprint $table) {
            $table->id();
            $table->integer('victoires')->default(0);
            $table->integer('défaites')->default(0);
            $table->integer('nuls')->default(0);
            $table->integer('pour')->default(0);
            $table->integer('contre')->default(0);
            $table->integer('goal_average')->default(0);
            $table->integer('bonus')->default(0);
            $table->integer('points')->default(0);
            $table->integer('classement')->default(0);
            $table->foreignId('team_id')->references('id')->on('teams');
            $table->foreignId('league_id')->references('id')->on('leagues');
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
        Schema::dropIfExists('classments');
    }
}
