<?php

use Illuminate\Database\Seeder;
use App\Models\Reference_Point;

class References_PointTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reference_Point::insert([
            [
                'title' => 'Кулиничи'
            ],
            [
                'title' => 'Отель 7 звезд'
            ],
            [
                'title' => 'Магазин Руслана'
            ],
            [
                'title' => 'Трамвайная остановка'
            ],
            [
                'title' => 'Метро'
            ],
            [
                'title' => 'Зоомагазин'
            ]
        ]);
    }
}
