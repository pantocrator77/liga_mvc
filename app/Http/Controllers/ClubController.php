<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{

    public function clubs (){
        $ClubName ="Club deportivo AA";
        $Team1 ="Masculino A";
        $Team2 ="Masculino B";
        $Team3 ="Feminimo A";
        $Team4 ="Feminimo B";
        $logo  = public_path() . '/resource/views/img/logo.png'; // destination path
        return view ('home', compact('ClubName', 'logo', 'Team1', 'Team2','Team3','Team4')); //
    }
    public function all_teams(){
        $Team1 ="Masculino A";
        $Team2 ="Masculino B";
        $Team3 ="Feminimo A";
        $Team4 ="Feminimo B";
        return view ('home', compact('ClubName', 'Team1', 'Team2','Team3','Team4')); //
    }
    }
