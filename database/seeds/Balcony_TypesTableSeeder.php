<?php

use Illuminate\Database\Seeder;
use App\Models\Balcony_Type;

class Balcony_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Balcony_Type::insert([
            [
                'title' => 'нет'
            ],
            [
                'title' => '1/-'
            ],
            [
                'title' => '1/+'
            ],
            [
                'title' => '2/+'
            ],
            [
                'title' => '2/-'
            ],
            [
                'title' => '3/+-'
            ],
            [
                'title' => '3/-'
            ],
            [
                'title' => '3/+'
            ],
            [
                'title' => '>3'
            ]
        ]);
    }
}
