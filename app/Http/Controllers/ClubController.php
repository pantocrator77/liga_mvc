<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{

    public function clubs (){
        $ClubName ="Club deportivo AA";
        $logo  = public_path() . '/resource/views/img/logo.png'; // destination path
        return view ('home', compact('ClubName', 'logo')); //
    }
}
