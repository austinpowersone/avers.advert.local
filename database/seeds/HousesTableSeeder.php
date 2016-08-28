<?php

use Illuminate\Database\Seeder;
use App\Models\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        House::insert([
            [
                'count_of_rooms' => 2,
                'id_type' => 1,
                'count_of_floors' => 2,
                'living_square' => 60,
                'kitchen_square' => 10,
                'total_square' => 90,
                'area_square' => 10,
                'cost' => 5000000,
                'id_material' => 52,
                'id_sewage' => 3,
                'id_water' => 1,
                'id_gas' => 1,
                'id_electricity' => 3,
                'id_state' => 5,
                'id_region' => 12,
                'id_reference_point' => 20,
                'id_street' => 220,
                'house_number' => 23,
                'header' => 'Хорошый красивый дом не дорого',
                'add_information' => 'Есть вай фай',
                'rating' => 450,
                'id_advert' => 42
            ],
            [
                'count_of_rooms' => 1,
                'id_type' => 4,
                'count_of_floors' => 2,
                'living_square' => 50,
                'kitchen_square' => 10,
                'total_square' => 70,
                'area_square' => 5,
                'cost' => 3000000,
                'id_material' => 55,
                'id_sewage' => 2,
                'id_water' => 2,
                'id_gas' => 2,
                'id_electricity' => 1,
                'id_state' => 3,
                'id_region' => 10,
                'id_reference_point' => 22,
                'id_street' => 222,
                'house_number' => 2,
                'header' => 'Неплохой красивый дом не дорого',
                'add_information' => 'Нет вай фай',
                'rating' => 250,
                'id_advert' => 44
            ],
            [
                'count_of_rooms' => 5,
                'id_type' => 4,
                'count_of_floors' => 5,
                'living_square' => 70,
                'kitchen_square' => 8,
                'total_square' => 90,
                'area_square' => 10,
                'cost' => 3000000,
                'id_material' => 53,
                'id_sewage' => 1,
                'id_water' => 1,
                'id_gas' => 3,
                'id_electricity' => 2,
                'id_state' => 4,
                'id_region' => 15,
                'id_reference_point' => 24,
                'id_street' => 2,
                'house_number' => 1,
                'header' => 'Классный красивый дом не дорого',
                'add_information' => 'Есть вай фай и даже сауна',
                'rating' => 550,
                'id_advert' => 42
            ],
        ]);
    }
}
