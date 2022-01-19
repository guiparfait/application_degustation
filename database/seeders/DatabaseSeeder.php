<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Degustation;
use App\Models\User;
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
        $this->call([UsersTableSeeder::class]);
        User::factory(98)->create();
        Categorie::factory(10)->create();
        Degustation::factory(200)->create();
        Commentaire::factory(600)->create();
    }
}
