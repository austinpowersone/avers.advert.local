<?php

use Illuminate\Database\Seeder;
use App\Models\Expert;
class ExpertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expert::insert([
            [
                'id_password_type'=> 2,
                'phone'=> '+380993190054',
                'id_user'=> 4
            ]
        ]);
    }
}
