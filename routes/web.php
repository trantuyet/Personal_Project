<?php

use App\Http\Controllers\homeController;
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

Route::get('/', [homeController::class, 'landing']);
Route::POST('/login', [homeController::class, 'login']);
Route::get('/logout', function () {
    return redirect('/');
});
Route::get('/home', [homeController::class, 'home']);
Route::get('/discover', [homeController::class, 'discover']);
Route::get('/trending', [homeController::class, 'trending']);
Route::get('/player', function () {
    return view('player');
});
Route::get('/play/{p_name}', [homeController::class, 'play']);
Route::get('/mood/playlist/{p_name}', [homeController::class, 'play2']);
Route::get('/userplaylist', [homeController::class, 'userPlaylist']);
Route::POST('/signup', [homeController::class, 'signup']);
