<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreshersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freshers', function (Blueprint $table){
            $table->increments('id');
            $table->string('name',255);
            $table->integer('rollNo');
            $table->string('dept',255);
            $table->string('mobile',255);
            $table->string('email',255);
            $table->text('ques1');
            $table->text('ques2');
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
        Schema::dropIfExists('freshers');
    }
}
