<?php

use Illuminate\Database\Seeder;

class Sewage_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sewage_types')->insert(
            [
                'title' => 'Нет'
            ]);
        DB::table('sewage_types')->insert(
            [
                'title' => 'Центральная'
            ]);
        DB::table('sewage_types')->insert(
            [
                'title' => 'Яма'
            ]);
    }
}
