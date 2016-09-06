<?php

use Illuminate\Database\Seeder;
use Imageuse App\Models\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::insert([
            [
                'path'=> 'kvartira11.jpg'
            ],
            [
                'path'=> 'kvartira12.jpg'
            ],
            [
                'path'=> 'kvartira13.jpg'
            ],
            [
                'path'=> 'kvartira14.jpg'
            ],
            [
                'path'=> 'kvartira15.jpg'
            ],
            [
                'path'=> 'kvartira21.jpg'
            ],
            [
                'path'=> 'kvartira22.jpg'
            ],
            [
                'path'=> 'kvartira23.jpg'
            ],
            [
                'path'=> 'kvartira24.jpg'
            ],
            [
                'path'=> 'kvartira25.jpg'
            ]
        ]);    
    }
}
