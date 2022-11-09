<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    function createPlaylist(){
        return view('playlistPage');
    }
}
