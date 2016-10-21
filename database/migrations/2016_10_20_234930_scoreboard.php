<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Scoreboard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scoreboard', function (Blueprint $table){
            $table->integer('event_id')->unsigned();
            $table->float('diamond_score');
            $table->float('agate_score');
            $table->float('coral_score');
            $table->float('jade_score');
            $table->float('opal_score');
            $table->foreign('event_id')->references('event_id')->on('events_details');
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
        Schema::dropIfExists('scoreboard');
    }
}
