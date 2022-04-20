<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teams (){
        $TeamName="Equipo A";
        return view ('teams', compact('TeamName'));
    }
}
