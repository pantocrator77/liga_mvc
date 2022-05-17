<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Game;
use Illuminate\Support\Facades\DB;


class ClubController extends Controller
{

    public function club(Request $request){
             $ClubName="Club deportivo Girona";
             $teams = DB::table('teams')
             ->where ('club', 'Girona')  
             ->get();
            $TeamName="Girona";
             $games = game::where('team_A', $TeamName)->orWhere('team_B', $TeamName)->paginate(5) //Show games of the team and paginate them 
             ->get();
         return view ('home', compact ('ClubName','teams', 'games'));

    }

}
