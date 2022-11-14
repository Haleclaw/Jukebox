<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// dashboard // home page //
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

// playlist page //
    Route::get('/playlists',  [PlaylistController::class, 'getPlaylists'] , function () { })->name('playlists');
    
// create playlist forum // 
    Route::get('/createPlaylist', function () { return view('createPlaylist');})->name('createPlaylist');

// edit playlist forum //
    Route::get('/editPlaylist', function () { return view('editPlaylist');})->name('editPlaylist');  

// add playlist // link controller //
    Route::post('/addPlaylist', [PlaylistController::class, 'createPlaylist'] , function () {})->name('addPlaylist');

// change playlist // link controller //
    Route::get('/changePlaylist/{id}', [PlaylistController::class, 'storeId'] , function () {})->name('storeId');

// post edit playlist // link controller //
    Route::post('/changePlaylist/Push', [PlaylistController::class, 'changePlaylistPush'] , function () {})->name('changePlaylistPush');

// delete playlist //
    Route::get('/deletePlaylist/{id}', [PlaylistController::class, 'deletePlaylist'] , function () {})->name('deletePlaylist');

// music genre // 
    Route::get('/musicList', [GenreController::class, 'getAllGenre'] , function () {})->name('musicList');

// genre song page //
   Route::get('/genreSongList/{id}', [GenreController::class, 'getAllGenreSongs'] , function () {})->name('genreSongList');

// song details page //
    Route::get('/songDetails/{id}', [SongController::class, 'getSongDetails'] , function () {})->name('songDetails');


