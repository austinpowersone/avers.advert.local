<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeletingForeignAdverts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adverts', function ($table) {
            $table->dropForeign('adverts_id_expert_foreign');
            $table->dropForeign('adverts_id_agent_foreign');
            $table->dropColumn('id_agent');
            $table->dropColumn('id_expert');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
