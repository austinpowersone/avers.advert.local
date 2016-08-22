<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bathroom_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bathroom_types')->insert(
            [
                'title' => 'Разделенный'
            ]);
        DB::table('bathroom_types')->insert([
            'title' => 'Совместный'
        ]);
        DB::table('bathroom_types')->insert([
            'title' => '2 Раздельных'
        ]);
        DB::table('bathroom_types')->insert([
            'title' => '2 Совместных'
        ]);
        DB::table('bathroom_types')->insert([
            'title' => 'Двор'
        ]);
        DB::table('bathroom_types')->insert([
            'title' => 'Общий'
        ]);
        DB::table('bathroom_types')->insert([
            'title' => 'Нет'
        ]);
    }
}
