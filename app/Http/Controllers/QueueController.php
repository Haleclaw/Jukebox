<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Http\Controllers\SessionController;
use App\Models\Saved_Song;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;


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

    function changeQueueToPlaylist(Request $request){
        $playlist = new Playlist;

        $playlist->name = $request->name;

        $playlist->description = $request->description;

        $playlist->userid = Auth::user()->id;

        $playlist->save();

        $name = Playlist::where('name', $request->name)->get();

        $songs = app('App\Http\Controllers\SessionController')->sessionPullAll('playlists', $request);

        foreach ($songs as $song => $count){
            $savedSong = new Saved_Song;

            $savedSong->listid = $name[0]->id;

            $savedSong->songid = $songs[$song];

            $savedSong->save();
        }

        return redirect('/dashboard');
    }
}
