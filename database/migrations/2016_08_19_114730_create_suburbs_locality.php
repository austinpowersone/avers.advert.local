<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuburbsLocality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suburbs_locality', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_suburb')->unsigned();
            $table->foreign('id_suburb')->references('id')->on('regions');
            $table->integer('id_locality')->unsigned();
            $table->foreign('id_locality')->references('id')->on('localities');
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
        Schema::drop('suburbs_locality');

    }
}
