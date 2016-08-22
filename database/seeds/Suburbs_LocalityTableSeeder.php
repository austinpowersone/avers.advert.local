<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Suburbs_LocalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1682 ; $i <= 1738 ; $i++ ){
            DB::table('suburbs_locality')->insert(
                [
                    [
                        'id_suburb' => 106,
                        'id_locality' => $i
                    ]
                ]);
        }
    }
}
