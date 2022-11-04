<?php

use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\CadastroProduto;
use \App\Http\Controllers\CadastroFornecedor;
use \App\Http\Controllers\CadastroObra;
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
 
Route::middleware('autenticacao')
    ->get( '/home',[HomeController::class,'index'])
    ->name('site.home');

Route::middleware('autenticacao')
    ->get( '/sair',[LoginController::class, 'sair'])
    ->name('site.sair');

Route::middleware('autenticacao')
    ->get( '/cadastroproduto',[CadastroProduto::class, 'index'])
    ->name('site.cadastroproduto');

Route::middleware('autenticacao')
    ->get( '/cadastrofornecedor',[CadastroFornecedor::class, 'index'])
    ->name('site.cadastrofornecedor');

Route::middleware('autenticacao')
    ->get( '/cadastroobra',[CadastroObra::class, 'index'])
    ->name('site.cadastroobra');
   


Route::get('/{erro?}',[LoginController::class,'index'])->name('site.login');
Route::post('/',[LoginController::class,'autenticar'])->name('site.login');

/*
Route::middleware('autenticacao')->prefix('/app')->group(function(){


    Route::get( '/home',[\App\Http\Controllers\HomeController::class, 'index'])->name('site.home');
    Route::get( '/cadastroproduto',[\App\Http\Controllers\CadastroProduto::class, 'index'])->name('site.cadastroproduto');
    Route::get( '/cadastroobra',[\App\Http\Controllers\CadastroObra::class, 'index'])->name('site.cadastroobra');

});
*/
   