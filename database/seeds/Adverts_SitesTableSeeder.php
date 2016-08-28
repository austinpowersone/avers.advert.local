<?php

use Illuminate\Database\Seeder;

class Adverts_SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adverts_sites')->insert(
            [
            [
                'id_advert' => 41,
                'id_site' => 10
            ],
            [
                'id_advert' => 42,
                'id_site' => 11
            ],
            [
                'id_advert' => 43,
                'id_site' => 12
            ],
            [
                'id_advert' => 44,
                'id_site' => 15
            ]
            ]);
    }
}
