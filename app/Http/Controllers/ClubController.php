<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{

    public function clubs (){
        $ClubName ="Equipo A";
        return view ('clubs', compact('ClubName')); //
    }
}
