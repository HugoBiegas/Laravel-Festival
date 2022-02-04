<?php

namespace Database\Seeders;

use App\Models\Equipe;
use App\Models\Attribution;
use App\Models\Etablissement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Equipe::factory(10)->create();
        \App\Models\Etablissement::factory(4)->create();
        \App\Models\Attribution::factory(5)->create();
        
    }
}
