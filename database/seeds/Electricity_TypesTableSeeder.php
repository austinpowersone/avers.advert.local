<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Electricity_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('electricity_types')->insert(
            [
                'title' => 'Дом'
            ]);
        DB::table('electricity_types')->insert([
            'title' => 'Улица'
        ]);
        DB::table('electricity_types')->insert([
            'title' => 'Двор'
        ]);
    }
}
