<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ClubController;


use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Game;

class TeamController extends Controller
{
    public function teams (Request $request ){
        
        $TeamName=$request->query('id');//$team_club->name;
        $coach="liga.team.coach";//$team_club->
        $games = game::where('team_A', $TeamName)->orWhere('team_B', $TeamName)->paginate(5); //Show games of the team and paginate them
        return view ('teams', compact('TeamName', 'coach', 'games'));
        //return $games;
    }
    public function addteam (request $request){
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
    public function select_team2 (Request $request){
        $request->flash();
        $path = $request->getPathInfo(); //get request path
        $arr = explode('/', $path); //divide full puth into array
        $id=($arr [2]); //get element 2 of array (id)
        $team_Club = new Team();
        $team_club = Team::find($id); //find team with id
        $TeamName = $team_club->name;
        $coach=$team_club->entrenador;
        $id=$team_club->id;
        $games = game::where('team_A', $TeamName)->orWhere('team_B', $TeamName)->paginate(5); //Show games of the team and paginate them
        return view ('teams', compact('TeamName', 'coach', 'games', 'team_club', 'id'));
    }
}