<?php
namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Jeu;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Categorie::factory(10)->create();
        Tag::factory(50)->create();
        Jeu::factory(10)->create();
        $jeux = Jeu::all();
        foreach($jeux as $jeu) { //va ajouter dans la table pivot grâce au modèle
            $jeu->tags()->attach(1); //attach pr ajouter, detach pour enlever
        }

    }
}
