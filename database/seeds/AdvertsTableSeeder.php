<?php

use Illuminate\Database\Seeder;
use App\Models\Advert;
use Illuminate\Support\Facades\Input;

class AdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advert::insert([
            [
                'title'=> 'Продам квартиру',
                'id_user'=> 1,
                'call_clear' => 2,
                'call_mediators' => 3,
                'date' => new DateTime(),
                'status' => '1',
            ],
            [
                'title'=> 'Продам дом',
                'id_user'=> 5,
                'call_clear' => 12,
                'call_mediators' => 32,
                'date' => new DateTime,
                'status' => '1',
            ],
            [
                'title'=> 'Продам квартиру',
                'id_user'=> 6,
                'call_clear' => 22,
                'call_mediators' => 33,
                'date' => new DateTime,
                'status' => '1',
            ],
            [
                'title'=> 'Продам дом',
                'id_user'=> 5,
                'call_clear' => 12,
                'call_mediators' => 23,
                'date' => new DateTime,
                'status' => '2',
            ]
        ]);
    }
}
