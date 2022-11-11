<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    function createPlaylist(Request $request){

        $playlist = new Playlist;

        $playlist->userid = Auth::user()->id;

        $playlist->name = $request->name;

        $playlist->description = $request->description;

        $playlist->save();

        return redirect('/playlists');

    }

    function getPlaylists(){
        $playlist = Playlist::all();

        return view('playlistPage')->with('playlist' , $playlist);
    }
}
