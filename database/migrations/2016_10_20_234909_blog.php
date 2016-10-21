<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table){
            $table->increments('blog_id');
            $table->integer('author_id')->unsigned();
            $table->string('title',255);
            $table->string('subtitle',255);
            $table->text('content');
            $table->string('image_path');
            $table->tinyInteger('active');
            $table->foreign('author_id')->references('author_id')->on('blog_authors');
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
        Schema::dropIfExists('blog');
    }
}
