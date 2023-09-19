<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliticaPublicaSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('politicas_publicas')->insert([
            [
                'name' => 'Política Nacional de Medio Ambiente',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ENBIO',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ENCA',
                'user_id' => 1,
                'created_at' => now(),
                'update_at' => now(),
            ],
            [
                'name' => 'PROMARNAT',
                'user_id' => 1,
                'created_at' => now(),
                'update_at' => now(),
            ],
            [
                'name' => 'PNH',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PECC',
                'user_id' => 1,
                'created_at' => now(),
                'update_at' => now(),
            ],
            [
                'name' => 'NDC',
                'user_id' => 1,
                'created_at' => now(),
                'update_at' => now(),
            ],
        ]);
    }
}
