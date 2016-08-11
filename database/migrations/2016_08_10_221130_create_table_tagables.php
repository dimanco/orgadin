<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTagables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagables', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('tag_id')->unsigned();
	        $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
	        $table->integer('taggable_id');
	        $table->string('taggable_type');
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
        Schema::drop('tagables');
    }
}
