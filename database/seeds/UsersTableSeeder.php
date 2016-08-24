<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'login'=> 'director',
                'password'=> '123',
                'id_role'=> 1
            ],
            [
                'login'=> 'admin',
                'password'=> '123',
                'id_role'=> 2
            ],
            [
                'login'=> 'secretar',
                'password'=> '123',
                'id_role'=> 3
            ],
            [
                'login'=> 'expert',
                'password'=> '123',
                'id_role'=> 4
            ],
            [
                'login'=> 'agent1',
                'password'=> '123',
                'id_role'=> 5
            ],
            [
                'login'=> 'agent2',
                'password'=> '123',
                'id_role'=> 5
            ],
            [
                'login'=> 'agent3',
                'password'=> '123',
                'id_role'=> 5
            ],
            [
                'login'=> 'agent4',
                'password'=> '123',
                'id_role'=> 5
            ],
        ]);
    }
}
