<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Team;
use App\Models\Game;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /** \App\Models\User::factory(10)->create();*/
        $Club = new Club();
        $Club -> name = 'Girona Futbol';
        $Club -> address= 'calle Balmes 133 Girona';
        $Club -> save();

        $Club2 = new Club();
        $Club2 -> name = 'Tarragona futbol club';
        $Club2 -> address= 'carrer Rossello 124 Tarragona';
        $Club2 -> save();

        $Club3 = new Club();
        $Club3 -> name = 'Reus futbol club';
        $Club3 -> address= 'carrer valencia 124 Reus';
        $Club3 -> save();

        $Team = new Team();
        $Team -> name = 'Girona masculino';
        $Team -> club= 'Girona';
        $Team -> entrenador= 'Joan';
        $Team -> cat= 'primera';
        $Team -> save();

        $Team2 = new Team();
        $Team2 -> name = 'Girona feminino';
        $Team2 -> club= 'Girona';
        $Team2 -> entrenador= 'Toni';
        $Team2 -> cat= 'primera';
        $Team2 -> save();

        $Team3 = new Team();
        $Team3 -> name = 'Girona junior';
        $Team3 -> club= 'Girona';
        $Team3 -> entrenador= 'Andres';
        $Team3 -> cat= 'segunda';
        $Team3 -> save();

        $Team4 = new Team();
        $Team4 -> name = 'Girona masculino B';
        $Team4 -> club= 'Girona';
        $Team4 -> entrenador= 'Tito';
        $Team4 -> cat= 'segunda';
        $Team4 -> save();

        $Team5 = new Team();
        $Team5 -> name = 'Tarragona masculino';
        $Team5 -> club= 'Tarragona';
        $Team5 -> entrenador= 'Andreu';
        $Team5 -> cat= 'primera';
        $Team5 -> save();

        $Team6 = new Team();
        $Team6 -> name = 'Tarragona feminino';
        $Team6 -> club= 'Tarragona';
        $Team6 -> entrenador= 'Marta';
        $Team6 -> cat= 'primera';
        $Team6 -> save();

        $Team7 = new Team();
        $Team7 -> name = 'Tarragona junior';
        $Team7 -> club= 'Tarragona';
        $Team7 -> entrenador= 'Luis';
        $Team7 -> cat= 'segunda';
        $Team7 -> save();

        $Team8 = new Team();
        $Team8 -> name = 'Tarragona masculino B';
        $Team8 -> club= 'Tarragona';
        $Team8 -> entrenador= 'Titus';
        $Team8 -> cat= 'segunda';
        $Team8 -> save();

        $Team9 = new Team();
        $Team9 -> name = 'Reus masculino';
        $Team9 -> club= 'Reus';
        $Team9 -> entrenador= 'Jordi';
        $Team9 -> cat= 'primera';
        $Team9 -> save();

        $Team10 = new Team();
        $Team10 -> name = 'Reus feminino';
        $Team10 -> club= 'Reus';
        $Team10 -> entrenador= 'Walter';
        $Team10 -> cat= 'primera';
        $Team10 -> save();

        $Team11 = new Team();
        $Team11 -> name = 'Reus Junior';
        $Team11 -> club= 'Reus';
        $Team11 -> entrenador= 'Nico';
        $Team11 -> cat= 'primera';
        $Team11 -> save(); 

        $game = new Game();
        $game -> team_A = 'Reus Junior';
        $game -> score_A = '1';
        $game -> team_B = 'Tarrragona Junior';
        $game -> score_B = '2';
        $game -> save();

        $game2 = new Game();
        $game2 -> team_A = 'Tarragona masculino B';
        $game2 -> score_A = '3';
        $game2 -> team_B = 'Girona masculino';
        $game2 -> score_B = '2';
        $game2 -> save();

        $game3 = new Game();
        $game3 -> team_A = 'Girona feminino';
        $game3 -> score_A = '1';
        $game3 -> team_B = 'Reus feminino';
        $game3 -> score_B = '0';
        $game3 -> save();

        $game4 = new Game();
        $game4 -> team_A = 'Tarragona masculino';
        $game4 -> score_A = '';
        $game4 -> team_B = 'Reus masculino';
        $game4 -> score_B = '';
        $game4 -> save();
        
    }
}
