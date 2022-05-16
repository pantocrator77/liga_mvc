<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{

    public function club(Request $request){
        $ClubName ="Club deportivo Girona";
        $club_id = $request->query('id');
        $team_club = DB::table('teams')
            ->where ('id', $club_id)  
            ->get('name', 'id');
            //dd($club_team);
       
       

        return view ('home', compact ('ClubName','team_club', 'club_id'));

    }

}
