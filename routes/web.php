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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/user', function () {
    return view('users');
});

Route::get('/home', function () {
    return view('home');
});
*/
Route::get('/', function () {
    return view('site.home');
});

Route::get('/login','LoginController@index')->name('site.login');