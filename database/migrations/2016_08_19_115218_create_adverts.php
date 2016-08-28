<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdverts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->boolean('limit_sites');
            $table->string('title');
            $table->integer('id_agent')->unsigned();
            $table->foreign('id_agent')->references('id')->on('agents');
            $table->integer('id_expert')->unsigned();
            $table->foreign('id_expert')->references('id')->on('experts');
            $table->integer('call_clear');
            $table->integer('call_mediators');
            $table->date('date');
            $table->char('status', 1);
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
        Schema::drop('adverts');
    }
}
