<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\QueueController;
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
    Route::get('/playlists',  [PlaylistController::class, 'getPersonalPlaylist'] , function () { })->name('playlists');
    
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

// add song to playlist forum // 
    Route::get('/addSongToPlaylist/{id}', [PlaylistController::class, 'getAllPlaylistNames'] , function () {})->name('getAllPlaylistNames');

// add song to playlist // 
    Route::post('/addSongToPlaylist/push', [SongController::class, 'addSongToPlaylist'] , function () {})->name('addSongToPlaylist');

// show my playlist songs // 
    Route::get('/myPlaylistSongs/{id}', [SongController::class, 'getPlaylistSongs'] , function () {})->name('myPlaylistSongs');

// delete song out of a playlist //
    Route::get('/playlistdetails/{id}/remove', [SongController::class, 'deleteSongInPlaylist'] , function () {})->name('deleteSongInPlaylist');

// add to queue //
    Route::get('/addToQueue/{id}', [QueueController::class, 'addToQueue'] , function () {})->name('addToQueue');

// queue page //
    Route::get('/queuePage', [QueueController::class, 'getAllSongs'] , function () { return view('queuePage');})->name('queuePage');

// queue song remove from queue //
    Route::get('/queue/{id}/remove', [QueueController::class, 'deleteSong'] , function () {})->name('deleteSong');

// change Queue to Playlist //
    Route::post('/makeQueuetoPlaylist', [QueueController::class, 'changeQueueToPlaylist'] , function () {})->name('changeQueueToPlaylist');

// change Queue to playlist form //
    Route::get('/makeQueuetoPlaylistForm', function () { return view('makeQueuetoPlaylistForm');})->name('makeQueuetoPlaylistForm');

    





