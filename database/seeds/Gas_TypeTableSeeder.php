<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Gas_TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gas_types')->insert(
            [
                'title' => 'Дом'
            ]);
        DB::table('gas_types')->insert(
            [
                'title' => 'Улица'
            ]);
        DB::table('gas_types')->insert(
            [
                'title' => 'Двор'
            ]);
    }
}
