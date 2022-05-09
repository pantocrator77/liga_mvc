<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function games (){
        $TeamName="Girona feminino";
        $coach="liga.team.coach";
        return view ('nuevopartido', compact('TeamName', 'coach'));
    }
    public function storegames (){
        return view ('nuevopartido', compact('TeamName', 'coach'));
    }
}
