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
            $table->integer('victoires');
            $table->integer('défaites');
            $table->integer('nuls');
            $table->integer('pour');
            $table->integer('contre');
            $table->integer('goal_average');
            $table->integer('bonus');
            $table->integer('points');
            $table->integer('classement');
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
