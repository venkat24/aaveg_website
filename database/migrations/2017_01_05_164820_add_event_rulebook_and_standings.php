<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventRulebookAndStandings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events_details', function ($table) {
            $table->string('event_rulebook',255);
            $table->string('first_place', 255);
            $table->string('second_place', 255);
            $table->string('third_place', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events_details', function ($table) {
            $table->dropColumn('event_rulebook');
            $table->dropColumn('first_place');
            $table->dropColumn('second_place');
            $table->dropColumn('third_place');
        });
    }
}
