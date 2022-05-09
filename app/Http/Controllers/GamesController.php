<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    public function games (){
        $TeamName="Girona feminino";
        $coach="liga.team.coach";
        return view ('nuevopartido');
    }
    public function storegames (request $request){
        //return $request->all();
        $game = new Game();
        $game->team_A = $request->EquipoA;
        $game->score_A = $request->golA;
        $game->team_B = $request->EquipoB;
        $game->score_B = $request->golB;
        $game->save();
    }
}
