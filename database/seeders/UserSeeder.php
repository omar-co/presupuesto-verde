<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Omar',
                'last_name' => 'Coronado',
                'email' => 'omar.goco@gmail.com',
                'password' => '$2y$10$83gpNmvkG1L0/N4UVigCCu4P5.3n1Udc.aCrIrrQOeTwSwRzgttwa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
