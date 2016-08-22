<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Water_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('water_types')->insert(
            [
                'title' => 'Дом'
            ]);
        DB::table('water_types')->insert(
            [
                'title' => 'Улица'
            ]);
        DB::table('water_types')->insert(
            [
                'title' => 'Двор'
            ]);
    }
}
