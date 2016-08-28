<?php

use Illuminate\Database\Seeder;

class Experts_AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expert_agents')->insert(
            [
                [
                    'id_expert' => 1,
                    'id_agent' => 1
                ],
                [
                    'id_expert' => 1,
                    'id_agent' => 2
                ],
                [
                    'id_expert' => 1,
                    'id_agent' => 3
                ],
            ]);
    }
}
