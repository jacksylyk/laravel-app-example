<?php

use Illuminate\Support\Facades\Route;
use App\Models\Genre;
use App\Models\Film;
use App\Models\General;
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
    $genres = Genre::all();
    $general = General::all();
    return view('welcome',['general' => $general],['genres' => $genres]);
});

Route::get('/genres', function () {
    $genres = Genre::all();

    return view('genres', ['genres' => $genres]);
});


Route::get('/films', function () {
    $films = Film::all();

    return view('films', ['films' => $films]);
});



//Route::get('/genres/{id}', function () {
//    return view('details', [
//        'id' => $id,
//    ]);
//});
