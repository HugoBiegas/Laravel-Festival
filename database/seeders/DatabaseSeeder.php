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
        \App\Models\Etablissement::factory(10)->create();
        Attribution::create([
            'etablissement_id' => 1,
            'equipe_id' => 2,
            'nombreChambres' => 1
        ]);

        Attribution::create([
            'etablissement_id' => 2,
            'equipe_id' => 2,
            'nombreChambres' => 1
        ]);

        Attribution::create([
            'etablissement_id' => 3,
            'equipe_id' => 1,
            'nombreChambres' => 1
        ]);
    }
}
