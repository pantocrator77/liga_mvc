<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Game;

class TeamController extends Controller
{
    public function teams (){
        $TeamName="Girona feminino";
        $coach="liga.team.coach";
        $games = game::all();
        //return view ('teams', compact('$TeamName', '$coach', '$games'));
        return $games;
    }
    public function addteam (request $request){
        //return $request->all();

        $team = new Team();
        $team->name = $request->name;
        $team->entrenador = $request->entrenador;
        $team->cat = $request->cat;
        $team->club = $request->club;
        $team->save();
        return Redirect('home');
    }
    public function formteam (){
        $clubname ="Girona";
        return view ('nuevoequipo');
    }
}
