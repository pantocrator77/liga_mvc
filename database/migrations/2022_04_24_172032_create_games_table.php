<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('team_A');
            $table->unsignedInteger('score_A')->default(0);
            $table->string('team_B');
            $table->unsignedInteger('score_B')->default(0);
            /**$table->foreign('team_A','team_B')->references('name')->on('teams')->OnUpdate('cascade')->OnDelete('cascade');
            $table->foreign('team_A','team_B')->references('name')->on('teams')->OnUpdate('cascade')->OnDelete('cascade');*/
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
        Schema::dropIfExists('games');
    }
}
