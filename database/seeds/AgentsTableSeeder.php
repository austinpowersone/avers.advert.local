<?php

use Illuminate\Database\Seeder;
use App\Models\Agent;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agent::insert([
            [
                'id_password_type'=> 2,
                'phone'=> '+380963190054',
                'id_user'=> 5
            ],
            [
                'id_password_type'=> 2,
                'phone'=> '+380963199055',
                'id_user'=> 6
            ],
            [
                'id_password_type'=> 2,
                'phone'=> '+380963190034',
                'id_user'=> 7
            ],
            [
                'id_password_type'=> 1,
                'phone'=> '+380963129054',
                'id_user'=> 8
            ]
        ]);
    }
}
