<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCatables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catables', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('cat_id')->unsigned();
	        $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
	        $table->integer('catable_id');
	        $table->string('catable_type');
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
        Schema::drop('catables');
    }
}
