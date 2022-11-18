<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Http\Controllers\SessionController;


class QueueController extends Controller
{
    function addToQueue(Request $request, $id){

        app('App\Http\Controllers\SessionController')->sessionPush('playlists', $id, $request);

        return redirect('/queuePage');
        
    }

    function getAllSongs(Request $request){
        $song = Song::all();
        $value = app('App\Http\Controllers\SessionController')->sessionGetAll('playlists', $request);

        return view('/queuePage')->with(['value' => $value, 'song' => $song]);
    }

    function deleteSong(Request $request , $id){
        app('App\Http\Controllers\SessionController')->sessionPull('playlists', $id, $request);

        return back();
    }
}
