<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{

    function storeId(Request $request , $id){
        app('App\Http\Controllers\SessionController')->sessionPut('name', $id, $request);
        return redirect('/editPlaylist');
    }

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


    function changePlaylistPush(Request $request){
        $name = app('App\Http\Controllers\SessionController')->sessionGetAll('name', $request);

        
         Playlist::where('id' , $name)->update(['name' => $request->name ,'description' =>  $request->description]);

         return redirect('/playlists');
    }
}
