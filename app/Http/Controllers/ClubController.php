<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{

    public function club(Request $request){
             $ClubName="Club deportivo Girona";//$teams=Team::all(); //cambiar a SELECT WHERE ID IS "club"
             $teams = DB::table('teams')
             ->where ('club', 'Girona')  
             ->get();
         return view ('home', compact ('ClubName','teams'));

    }

}
