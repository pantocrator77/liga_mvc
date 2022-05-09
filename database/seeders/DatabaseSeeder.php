<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Club;
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
        $Club = new Club();
        $Club -> name = 'Girona Futbol';
        $Club -> address= 'calle Balmes 133, Girona';
        $Club -> save();

        $Club = new Club();
        $Club -> name = 'Tarragona futbol club';
        $Club -> address= 'carrer Rossello 124, tarragona';
        $Club -> save();
    }
}
