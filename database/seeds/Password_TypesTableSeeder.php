<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Password_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('password_types')->insert(
            [
                'type' => 'Общий'
            ]);
        DB::table('password_types')->insert([
            'type' => 'Личный'
        ]);
    }
}
