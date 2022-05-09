<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teams (){
        $TeamName="Girona feminino";
        $coach="liga.team.coach";
        return view ('teams', compact('TeamName', 'coach'));
    }
}
