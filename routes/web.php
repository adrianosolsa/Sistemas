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
Route::middleware('autenticacao')->prefix('/app')->group(function(){


    Route::get( '/home',[\App\Http\Controllers\HomeController::class, 'index'])->name('site.home');
    Route::get( '/cadastroproduto',[\App\Http\Controllers\CadastroProduto::class, 'index'])->name('site.cadastroproduto');
    Route::get( '/cadastroobra',[\App\Http\Controllers\CadastroObra::class, 'index'])->name('site.cadastroobra');

});
*/
   
 
Route::middleware('autenticacao')
    ->get( '/home',[\App\Http\Controllers\HomeController::class, 'index'])
    ->name('site.home');

Route::middleware('autenticacao')
    ->get( '/sair',[\App\Http\Controllers\LoginController::class, 'sair'])
    ->name('site.sair');


Route::middleware('autenticacao')
    ->get( '/cadastroproduto',[\App\Http\Controllers\CadastroProduto::class, 'index'])
    ->name('site.cadastroproduto');

Route::middleware('autenticacao')
    ->get( '/cadastroobra',[\App\Http\Controllers\CadastroObra::class, 'index'])
    ->name('site.cadastroobra');
   


Route::get('/{erro?}',[\App\Http\Controllers\LoginController::class,'index'])->name('site.login');
Route::post('/',[\App\Http\Controllers\LoginController::class,'autenticar'])->name('site.login');