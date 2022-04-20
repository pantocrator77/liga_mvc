<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function logo ($logo)
    {
        $storagePath = storage_path('/resources/views/img/club_logo.png');

        return Image::make($storagePath)->response();
    }
}
