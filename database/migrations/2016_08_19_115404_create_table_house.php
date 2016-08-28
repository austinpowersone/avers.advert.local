<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('count_of_rooms');
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('house_types');
            $table->integer('count_of_floors');
            $table->double('living_square');
            $table->double('kitchen_square');
            $table->double('total_square');
            $table->double('area_square');
            $table->integer('cost');
            $table->integer('id_material')->unsigned();
            $table->foreign('id_material')->references('id')->on('materials');
            $table->integer('id_sewage')->unsigned();
            $table->foreign('id_sewage')->references('id')->on('sewage_types');
            $table->integer('id_water')->unsigned();
            $table->foreign('id_water')->references('id')->on('water_types');
            $table->integer('id_gas')->unsigned();
            $table->foreign('id_gas')->references('id')->on('gas_types');
            $table->integer('id_electricity')->unsigned();
            $table->foreign('id_electricity')->references('id')->on('electricity_types');
            $table->integer('id_state')->unsigned();
            $table->foreign('id_state')->references('id')->on('house_state_types');
            $table->integer('id_region')->unsigned();
            $table->foreign('id_region')->references('id')->on('regions');
            $table->integer('id_reference_point')->unsigned();
            $table->foreign('id_reference_point')->references('id')->on('references_point');
            $table->integer('id_street')->unsigned();
            $table->foreign('id_street')->references('id')->on('streets');
            $table->string('house_number');
            $table->string('header', 53);
            $table->string('description', 2000);
            $table->string('add_information');
            $table->integer('rating');
            $table->integer('id_advert')->unsigned();
            $table->foreign('id_advert')->references('id')->on('adverts');
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
        Schema::drop('table_house');
    }
}
