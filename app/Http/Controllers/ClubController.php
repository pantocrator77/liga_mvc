<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function clubs (){
        return view ('clubs');
    }
}
