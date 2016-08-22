<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class State_House_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('house_state_types')->insert(
            [
                'title' => 'Под снос'
            ]);
        DB::table('house_state_types')->insert(
            [
                'title' => 'Плохое'
            ]);
        DB::table('house_state_types')->insert(
            [
                'title' => 'Жилое'
            ]);
        DB::table('house_state_types')->insert(
            [
                'title' => 'Ремонт'
            ]);
        DB::table('house_state_types')->insert(
            [
                'title' => 'Капитальный ремонт'
            ]);
        DB::table('house_state_types')->insert(
            [
                'title' => 'Недострой'
            ]);
        DB::table('house_state_types')->insert(
            [
                'title' => 'Без внутренних работ'
            ]);
    }
}
