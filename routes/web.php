<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'homeController@landing');
Route::POST('/login', 'homeController@login');
Route::get('/logout', function () {
    return redirect('/');
});
Route::get('/home', 'homeController@home');
Route::get('/discover', 'homeController@discover');
Route::get('/trending', 'homeController@trending');
Route::get('/player', function () {
    return view('player');
});
Route::get('/play/{p_name}', 'homeController@play');
Route::get('/mood/playlist/{p_name}', 'homeController@play2');
Route::get('/userplaylist', 'homeController@userPlaylist');
Route::POST('/signup', 'homeController@signup');
