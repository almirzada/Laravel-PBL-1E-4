<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionSeeder extends Seeder
{
    public function run()
    {
        DB::table('competitions')->insert([
            ['name' => 'Futsal', 'min_members' => 7, 'max_members' => 12],
            ['name' => 'Basket', 'min_members' => 7, 'max_members' => 12],
            ['name' => 'Badminton', 'min_members' => 2, 'max_members' => 2],
        ]);
    }
}

