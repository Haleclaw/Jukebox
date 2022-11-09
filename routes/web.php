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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// playlist page //
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/playlists', function () {
        return view('playlistPage');
    })->name('playlists');
});


// create playlist with forum // 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/createPlaylist', function () {
        return view('createPlaylist');
    })->name('createPlaylist');
});

// add playlist // link controller //
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/addPlaylist', [PlaylistController::class, 'createPlaylist'] , function () {
    })->name('addPlaylist');
});

// music genre // 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/musicList', function () {
        return view('musicGenrePage');
    })->name('musicList');
});


