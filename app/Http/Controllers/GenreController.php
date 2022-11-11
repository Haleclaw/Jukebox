<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    function getAllGenre(){
        $Genre = Genre::all();

        return view('musicGenrePage')->with('Genre' , $Genre);    
    }

    function getAllGenreSongs($id){

        $songs = Genre::find($id)->songs;

        return view('genreSongList')->with('songs' , $songs);

    }
    
}
