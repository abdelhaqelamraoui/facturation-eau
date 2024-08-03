<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Client;
use App\Models\Compteur;
use App\Models\Facture;
use App\Models\Releve;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Client::factory()
            ->count(10)
            ->create()
            ->each(function ($client) {

                Compteur::factory()
                    ->count(1)
                    ->has(Releve::factory(random_int(1, 100)))
                    ->create(['client_id' => $client->id])
                    ->each(function ($compteur) use ($client) {
                        Facture::factory()
                            ->count(1)
                            ->create(['compteur_id' => $compteur->id, 'client_id' => $client->id]);
                    });
            });
    }
}
