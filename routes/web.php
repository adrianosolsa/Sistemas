<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;

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



Route::get('/home', function () {
    return view('site.home');
})->name('site.home');
/*/




Route::get('/{erro?}',[\App\Http\Controllers\LoginController::class,'index'])->name('site.login');
Route::post('/',[\App\Http\Controllers\LoginController::class,'autenticar'])->name('site.login');


Route::middleware(LogAcessoMiddleware::class)
    ->get( '/home',[\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home')->name('site.home');


Route::get('/cadastroproduto', function(){ return view('site.cadastroproduto'); })->name('cadastros.cadastroproduto');


/*
Route::prefix('/app')->group(function(){
    Route::get('/cadastroproduto', function(){ return view('site.cadastroproduto'); })->name('cadastros.cadastroproduto');

});
*/
