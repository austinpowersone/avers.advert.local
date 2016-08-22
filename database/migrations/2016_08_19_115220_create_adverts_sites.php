<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsSites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('adverts_sites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_advert')->unsigned();
            $table->foreign('id_advert')->references('id')->on('adverts');
            $table->integer('id_site')->unsigned();
            $table->foreign('id_site')->references('id')->on('sites');
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
        Schema::drop('adverts_sites');
    }
}
