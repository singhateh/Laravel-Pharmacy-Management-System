<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'title' => 'Junior Pharmacist',
            'created_at' => now(),
        ]);

        DB::table('positions')->insert([
            'title' => 'Pharmacist',
            'created_at' => now(),
        ]);

        DB::table('positions')->insert([
            'title' => 'Senior Pharmacist',
            'created_at' => now(),
        ]);
    }
}
