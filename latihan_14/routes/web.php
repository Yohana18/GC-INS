<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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
    return view('home');
});
Route::get('/home', [HomeController::class, 'home']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);


Route::get('/data-table', function(){
    return view('data-table');
});

Route::get('/table', function(){
    return view('table');
});

Route::get('/profil', 'ProfilController@index');
Route::get('/akun', 'AkunController@index');
Route::get('/cast', 'CastlController@index');
Route::get('/film', 'FilmController@index');
Route::get('/peran', 'PeranController@index');
Route::get('/genre', 'GenreController@index');
Route::get('/kritik', 'KritikController@index');