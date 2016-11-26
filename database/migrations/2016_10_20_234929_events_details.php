<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_details', function (Blueprint $table){
            $table->increments('event_id');
            $table->string('event_name', 255);
            $table->time('event_start_time');
            $table->time('event_end_time');
            $table->string('event_venue',255);
            $table->text('event_desc');
            $table->date('event_date');
            $table->string('event_cluster', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_details');
    }
}
