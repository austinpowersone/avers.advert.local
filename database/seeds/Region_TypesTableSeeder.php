<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Region_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region_types')->insert(
            [
                'type' => 'Город'
            ]);
        DB::table('region_types')->insert([
            'type' => 'Пригород'
        ]);
    }
}
