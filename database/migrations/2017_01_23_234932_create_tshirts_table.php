<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTshirtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tshirt_details', function(Blueprint $table){
            $table->increments('id');
            $table->integer('roll_no')->unique();
            $table->string('name',255);
            $table->enum('hostel',['DIAMOND','CORAL','AGATE','JADE','OPAL']);
            $table->enum('size',['XS','S','M','L','XL','XXL']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tshirt_details');
    }
}
