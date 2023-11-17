<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_team_id')->references('id')->on('teams')->nullable()->constrained()->cascadeOnDelete();
            $table->integer('home_team_result');
            $table->integer('home_team_tries');
            $table->foreignId('away_team_id')->references('id')->on('teams')->nullable()->constrained()->cascadeOnDelete();
            $table->integer('away_team_result');
            $table->integer('away_team_tries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
