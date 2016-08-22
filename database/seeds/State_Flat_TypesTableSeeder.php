<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class State_Flat_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flat_state_types')->insert(
            [
                'title' => 'Убитая'
            ]);
        DB::table('flat_state_types')->insert(
            [
                'title' => 'Строительный'
            ]);
        DB::table('flat_state_types')->insert(
            [
                'title' => 'Без ремонта'
            ]);
        DB::table('flat_state_types')->insert(
            [
                'title' => 'Жилое'
            ]);
        DB::table('flat_state_types')->insert(
            [
                'title' => 'Косметический'
            ]);
        DB::table('flat_state_types')->insert(
            [
                'title' => 'Средний'
            ]);
        DB::table('flat_state_types')->insert(
            [
                'title' => 'Капитальный'
            ]);
        DB::table('flat_state_types')->insert(
            [
                'title' => 'Евроремонт'
            ]);
    }
}
