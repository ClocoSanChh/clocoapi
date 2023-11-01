<?php

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    $artist = Artist::create([
//        'name' => 'sandy',
//        'first_release_year' => 2015
//    ]);
    $artists = Artist::all();
    return response()->json([
        'data' => $artists
    ]);
});
