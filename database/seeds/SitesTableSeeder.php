<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert(
            [
                'title' => 'OLX'
            ]);
        DB::table('sites')->insert(
            [
                'title' => 'Rieltor.ua'
            ]);
        DB::table('sites')->insert(
            [
                'title' => 'ЦентрИнформ'
            ]);
        DB::table('sites')->insert(
            [
                'title' => 'ЦентрДом'
            ]);
        DB::table('sites')->insert(
            [
                'title' => 'Харьков Эстейт'
            ]);
        DB::table('sites')->insert(
            [
                'title' => 'Премьер'
            ]);
    }
}
