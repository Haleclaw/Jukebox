<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;

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

// edit playlist // forum //
    Route::get('/editPlaylist', function () { return view('editPlaylist');})->name('editPlaylist');

// add playlist // link controller //
    Route::post('/addPlaylist', [PlaylistController::class, 'createPlaylist'] , function () {})->name('addPlaylist');

// music genre // 
    Route::get('/musicList', function () { return view('musicGenrePage');})->name('musicList');


