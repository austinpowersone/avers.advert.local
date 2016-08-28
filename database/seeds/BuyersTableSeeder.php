<?php

use Illuminate\Database\Seeder;
use App\Models\Buyer;
class BuyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buyer::insert([
            [
                'name'=> 'Name Surname',
                'id_site'=> 10,
            ],
            [
                'name'=> 'Name1 Surname1',
                'id_site'=> 11,
            ],
            [
                'name'=> 'Name2 Surname2',
                'id_site'=> 12,
            ],
            [
                'name'=> 'Name3 Surname3',
                'id_site'=> 14,
            ]
        ]);
    }
}
