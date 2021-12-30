<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegisterModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('register_models')->insert([
            'model' => 'DATECS DP-50',
            'created_at' => now(),
        ]);

        DB::table('register_models')->insert([
            'model' => 'DATECS DP-55 Plus',
            'created_at' => now(),
        ]);

        DB::table('register_models')->insert([
            'model' => 'Triumph Adler Cms 240',
            'created_at' => now(),
        ]);
    }
}
