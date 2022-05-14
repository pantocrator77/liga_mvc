<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{

    public function club(){
        $ClubName ="Club deportivo Girona";
        $team_club = DB::table('teams')
            ->where ('club', 'Girona')  
            ->get('name');
        return view ('home', compact ('ClubName','team_club'));

    }
}
