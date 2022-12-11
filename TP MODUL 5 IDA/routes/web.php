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

Route::get('/', function () {
    return view('/layouts/Home-Ida');
});

Route::get('/Add-Ida', function () {
    return view('/layouts/Add-Ida');
});

// Route::post('/layouts', 'Showrooms@store');

Route::get('/layouts','App\Http\Controllers\Showrooms@create');
Route::post('/layouts','App\Http\Controllers\Showrooms@store');


Route::get('/List-Ida', function () {
    return view('/layouts/List-Ida');
});

// Route::resource('List-Ida', Showrooms::class);



