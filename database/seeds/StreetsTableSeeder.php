<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Street;

class StreetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::load('storage/app/streets.xls', function($reader) {

            $reader->noHeading();
            $reader->ignoreEmpty();

            $street_names = [];

            foreach ($reader->get() as $row) {
                $street_names[] = $row[1];
            }

            foreach ($street_names as $name){
                Street::insert([
                    ['title' => $name]
                ]);
            }
        });
    }
}
