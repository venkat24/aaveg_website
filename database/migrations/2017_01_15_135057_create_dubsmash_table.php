<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDubsmashTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dubsmash', function (Blueprint $table){
            $table->increments('entry_id');
            $table->string('name1',255);
            $table->string('name2',255)->nullable();
            $table->integer('rollNo1');
            $table->integer('rollNo2');
            $table->string('video_path');
            $table->enum('hostel',['Diamond','Coral','Agate','Jade','Opal']);
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
      Schema::dropIfExists('dubsmash');
    }
}
