<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Playlist;
use App\Models\Saved_Song;

class SongController extends Controller
{
    function getSongDetails($id){

        $song = Song::where('id' , $id)->get();


        return view('songDetails')->with('song' , $song);
    }

    function addSongToPlaylist(Request $request){
        $list = Playlist::where('name' , $request->playlist)->get();

        $songid = app('App\Http\Controllers\SessionController')->sessionGetAll('song' , $request);

        $savedSong = new Saved_Song;

        $savedSong->listid = $list[0]->id;

        $savedSong->songid = $songid;

        $savedSong->save();

        return redirect('/playlists');
        }

        function getPlaylistSongs(Request $request , $id){
            $name = playlist::where('id' , $id)->get();

            $select = Saved_Song::where('listid', $id)->get();

            $song = Song::all();

            return view('myplaylistSongs')->with(['name' => $name, 'select' => $select, 'song' => $song]);
        }

        function deleteSongInPlaylist(Request $request , $id){
            Saved_Song::where('id' , $id)->delete();
            
            return back();
        }
}
