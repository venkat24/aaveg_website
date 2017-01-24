<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photography', function (Blueprint $table){
            $table->increments('entry_id');
            $table->string('name',255);
            $table->integer('roll_no');
            $table->string('image_path');
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
        Schema::dropIfExists('photography');
    }
}
