<?php

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
    return view('home');
});

Route::get('/clan', 'ClanController@index');
Route::get('/clan/{clanTag}', 'ClanController@getClan');
Route::get('/clan/{clanTag}/war-history', 'ClanController@getWarLog');
Route::get('/player/{playerTag}', 'PlayerController@getPlayer');
Route::get('/search', 'SearchController@index');
Route::post('/search', 'SearchController@search');
Route::get('/about', function(){
	return view('about');
});
Route::post('/contact', 'AccountController@contact');
Route::get('/open-tournaments', 'TournamentController@findOpen');