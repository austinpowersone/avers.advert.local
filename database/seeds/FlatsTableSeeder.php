<?php

use Illuminate\Database\Seeder;
use App\Models\Flat;
class FlatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flat::insert([
            [
                'count_of_rooms' => 2,
                'id_type' => 1,
                'floor' => 3,
                'count_of_floor' => 12,
                'living_square' => 60,
                'kitchen_square' => 10,
                'total_square' => 70,
                'cost' => 500000,
                'id_schema' => 4,
                'id_material' => 52,
                'id_bathroom_type' => 3,
                'id_balcony_type' => 15,
                'id_state' => 8,
                'id_region' => 43,
                'id_reference_point' => 22,
                'id_street' => 23,
                'house_number' => 23,
                'flat_number' => 123,
                'header' => 'Хорошая красивая квартира не дорого',
                'add_information' => 'Есть вай фай',
                'rating' => 400,
                'id_advert' => 43
            ],
            [
                'count_of_rooms' => 3,
                'id_type' => 3,
                'floor' => 5,
                'count_of_floor' => 12,
                'living_square' => 50,
                'kitchen_square' => 10,
                'total_square' => 65,
                'cost' => 300000,
                'id_schema' => 2,
                'id_material' => 51,
                'id_bathroom_type' => 1,
                'id_balcony_type' => 18,
                'id_state' => 5,
                'id_region' => 40,
                'id_reference_point' => 21,
                'id_street' => 29,
                'house_number' => 2,
                'flat_number' => 13,
                'header' => 'Такая себе красивая квартира не дорого',
                'add_information' => 'Нет вай фай',
                'rating' => 300,
                'id_advert' => 41
            ],
            [
                'count_of_rooms' => 4,
                'id_type' => 5,
                'floor' => 6,
                'count_of_floor' => 9,
                'living_square' => 60,
                'kitchen_square' => 10,
                'total_square' => 70,
                'cost' => 5100000,
                'id_schema' => 2,
                'id_material' => 53,
                'id_bathroom_type' => 4,
                'id_balcony_type' => 17,
                'id_state' => 5,
                'id_region' => 40,
                'id_reference_point' => 20,
                'id_street' => 123,
                'house_number' => 3,
                'flat_number' => 134,
                'header' => 'Офигенная красивая квартира не дорого',
                'add_information' => 'Есть вай фай и сауна',
                'rating' => 600,
                'id_advert' => 41
            ]
        ]);
    }
}
