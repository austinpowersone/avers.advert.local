<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'title' => 'Директор'
            ]);
        DB::table('roles')->insert(
            [
                'title' => 'Администратор'
            ]);
        DB::table('roles')->insert(
            [
                'title' => 'Секретарь'
            ]);
        DB::table('roles')->insert(
            [
                'title' => 'Експерт'
            ]);
        DB::table('roles')->insert(
            [
                'title' => 'Агент'
            ]);
    }
}
