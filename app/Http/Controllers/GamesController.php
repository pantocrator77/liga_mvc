<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades;

class GamesController extends Controller
{
    public function games (){
        $TeamName="Girona feminino";
        $coach="liga.team.coach";
        return view ('nuevopartido');
    }

    public function storegames (request $request){

        $game = new Game();
        $game->team_A = $request->EquipoA;
        $game->score_A = $request->golA;
        $game->team_B = $request->EquipoB;
        $game->score_B = $request->golB;
        $game->save();
        return back();
         /*return redirect ()->route('select_team2');
        return Redirect()->route('select_team2::id');
        return redirect()->back();
        return back(); */
    }
    
}
