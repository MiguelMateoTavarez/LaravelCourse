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

Route::get('/', function() {
    return "Hola";
});

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('user.detail');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/usuarios/editar/{user}', 'UserController@edit')
    ->where('user', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController@index');