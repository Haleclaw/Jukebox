<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    function getSongDetails($id){

        $song = Song::where('id' , $id)->get();


        return view('songDetails')->with('song' , $song);
    }

    function addSongToPlaylistforum(){
        return view('addSongToPlaylist');


    }

    function addSongToPlaylist(Request $request){
        dd($request);
        }
}
