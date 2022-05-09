<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class ClubController extends Controller
{

    public function club(){
        $ClubName ="Club deportivo AAA";
        $teams=Team::all(); //cambiar a SELECT WHERE ID IS "club"
        return view ('home', compact ('ClubName','teams'));
    }
    }
