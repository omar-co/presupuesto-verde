<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PoliticaPublicaSeeder::class,
            PoliticaPublicaNivelSeeder::class,
            PoliticaPublicaElementoSeeder::class,
            EnbioSeeder::class,
            EncaSeeder::class,
            PnhSeeder::class,
            PromarnatSeeder::class,
            PeccSeeder::class,
            NdcSeeder::class,
            PnccSeeder::class,
            OdsSeeder::class,
        ]);
    }
}
