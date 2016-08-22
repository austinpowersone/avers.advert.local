<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpertsAgents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_agents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_expert')->unsigned();
            $table->foreign('id_expert')->references('id')->on('experts');
            $table->integer('id_agent')->unsigned();
            $table->foreign('id_agent')->references('id')->on('agents');
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
        Schema::drop('expert_agents');

    }
}
