<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Flat_SchemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flat_schemas')->insert(
            [
                'title' => 'Разделенная'
            ]);
        DB::table('flat_schemas')->insert([
            'title' => 'Смежная'
        ]);
        DB::table('flat_schemas')->insert([
            'title' => '2+1'
        ]);
        DB::table('flat_schemas')->insert([
            'title' => '2+2'
        ]);
        DB::table('flat_schemas')->insert([
            'title' => '2+1+1'
        ]);
        DB::table('flat_schemas')->insert([
            'title' => '3+1'
        ]);
    }
}
