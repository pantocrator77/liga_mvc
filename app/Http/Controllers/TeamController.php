<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function teams (){
        $TeamName="Girona feminino";
        $coach="liga.team.coach";
        return view ('teams', compact('TeamName', 'coach'));
    }
    public function addteam (request $request){
        //return $request->all();

        $team = new Team();
        $team->name = $request->name;
        $team->entrenador = $request->entrenador;
        $team->cat = $request->cat;
        $team->save();
    }
    public function formteam (){
        $clubname ="Girona";
        return view ('nuevoequipo');
    }
}
