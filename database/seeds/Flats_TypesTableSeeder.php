<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Flats_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flat_types')->insert(
            [
                'title' => 'Изолированная'
            ]);
        DB::table('flat_types')->insert([
            'title' => 'Гостинка'
        ]);
        DB::table('flat_types')->insert([
            'title' => 'Подселенка'
        ]);
        DB::table('flat_types')->insert([
            'title' => 'Новострой'
        ]);
        DB::table('flat_types')->insert([
            'title' => 'Гостинка новострой'
        ]);
    }
}
