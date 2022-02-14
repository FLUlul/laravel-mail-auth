<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */

Route::get('/', 'GuestController@home')->name('home');

Route::post('/videogames/login', 'Auth\LoginController@login')->name('login');
Route::post('/videogames/register', 'Auth\RegisterController@register')->name('register');
Route::get('/videogames/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/videogames/list', 'GuestController@gamesList')->name('games-list');
Route::get('/videogame/delete/{id}', 'HomeController@gameDelete')->name('game-delete');

