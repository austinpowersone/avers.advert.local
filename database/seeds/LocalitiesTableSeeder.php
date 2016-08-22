<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Locality;
class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::load('storage/app/localities.xlsx', function($reader) {

            $reader->noHeading();
            $reader->ignoreEmpty();

            $region_city = [];
            foreach ($reader->get() as $row) {
                Locality::insert([
                    ['title' => $row[1]]
                ]);
            }
            dd($region_city);
        });
    }
}
