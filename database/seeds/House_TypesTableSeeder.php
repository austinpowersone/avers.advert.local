<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class House_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('house_types')->insert(
            [
                'title' => 'Дом'
            ]);
        DB::table('house_types')->insert([
            'title' => 'Дача'
        ]);
        DB::table('house_types')->insert([
            'title' => 'Дом 1/2'
        ]);
        DB::table('house_types')->insert([
            'title' => 'Дом 1/3'
        ]);
        DB::table('house_types')->insert([
            'title' => 'Недострой'
        ]);
        DB::table('house_types')->insert([
            'title' => 'Участок'
        ]);
    }
}
