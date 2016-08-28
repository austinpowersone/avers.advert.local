<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFlat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->smallInteger('count_of_rooms');
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('flat_types');
            $table->integer('floor');
            $table->integer('count_of_floor');
            $table->double('living_square');
            $table->double('kitchen_square');
            $table->double('total_square');
            $table->integer('cost');
            $table->integer('id_schema')->unsigned();
            $table->foreign('id_schema')->references('id')->on('flat_schemas');
            $table->integer('id_material')->unsigned();
            $table->foreign('id_material')->references('id')->on('materials');
            $table->integer('id_bathroom_type')->unsigned();
            $table->foreign('id_bathroom_type')->references('id')->on('bathroom_types');
            $table->integer('id_balcony_type')->unsigned();
            $table->foreign('id_balcony_type')->references('id')->on('balcony_types');
            $table->integer('id_state')->unsigned();
            $table->foreign('id_state')->references('id')->on('flat_state_types');
            $table->integer('id_region')->unsigned();
            $table->foreign('id_region')->references('id')->on('regions');
            $table->integer('id_reference_point')->unsigned();
            $table->foreign('id_reference_point')->references('id')->on('references_point');
            $table->integer('id_street')->unsigned();
            $table->foreign('id_street')->references('id')->on('streets');
            $table->integer('house_number');
            $table->integer('flat_number');
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
        Schema::drop('table_flat');
    }
}
