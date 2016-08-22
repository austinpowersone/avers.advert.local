<?php

use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::insert([
            ['title' => 'Панель'],
            ['title' => 'Кирпич'],
            ['title' => 'Блочный'],
            ['title' => 'Дерево'],
            ['title' => 'Дерево+кирпич'],
            ['title' => 'Шлак'],
            ['title' => 'Монолит'],
            ['title' => 'Сруб'],
            ['title' => 'Саман'],
        ]);
    }
}
