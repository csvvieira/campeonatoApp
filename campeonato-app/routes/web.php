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

Route::get('/',[\App\Http\Controllers\jogadorController::class,'paginaInicial']);
Route::get('/cadastrarJ',[\App\Http\Controllers\jogadorController::class,'cad']);
Route::get('/cadastrarJ/salvarJ',[\App\Http\Controllers\jogadorController::class,'inserir']);
Route::get('/consultarPaginaInicialJ',[\App\Http\Controllers\jogadorController::class,'consultarPaginaInicialJ']);
Route::get('/editarJ/{id}',[\App\Http\Controllers\jogadorController::class,'editar']);
Route::get('/atualizarJ/{id}',[\App\Http\Controllers\jogadorController::class,'atualizar']);
Route::get('/excluirJ/{id}',[\App\Http\Controllers\jogadorController::class,'excluir']);

Route::get('/cadastrarC',[\App\Http\Controllers\campeonatoController::class,'cad']);
Route::get('/cadastrarC/salvarC',[\App\Http\Controllers\campeonatoController::class,'inserir']);
Route::get('/consultarPaginaInicialC',[\App\Http\Controllers\campeonatoController::class,'consultarPaginaInicialC']);
Route::get('/editarC/{id}',[\App\Http\Controllers\campeonatoController::class,'editar']);
Route::get('/atualizarC/{id}',[\App\Http\Controllers\campeonatoController::class,'atualizar']);
Route::get('/excluirC/{id}',[\App\Http\Controllers\campeonatoController::class,'excluir']);

Route::get('/cadastrarP',[\App\Http\Controllers\partidaController::class,'cad']);
Route::get('/cadastrarP/salvarP',[\App\Http\Controllers\partidaController::class,'inserir']);
Route::get('/consultarPaginaInicialP',[\App\Http\Controllers\partidaController::class,'consultarPaginaInicialP']);
Route::get('/editarP/{id}',[\App\Http\Controllers\partidaController::class,'editar']);
Route::get('/atualizarP/{id}',[\App\Http\Controllers\partidaController::class,'atualizar']);
Route::get('/excluirP/{id}',[\App\Http\Controllers\partidaController::class,'excluir']);

Route::get('/cadastrarT',[\App\Http\Controllers\timeController::class,'cad']);
Route::get('/cadastrarT/salvarT',[\App\Http\Controllers\timeController::class,'inserir']);
Route::get('/consultarPaginaInicialT',[\App\Http\Controllers\timeController::class,'consultarPaginaInicialT']);
Route::get('/editarT/{id}',[\App\Http\Controllers\timeController::class,'editar']);
Route::get('/atualizarT/{id}',[\App\Http\Controllers\timeController::class,'atualizar']);
Route::get('/excluirT/{id}',[\App\Http\Controllers\timeController::class,'excluir']);
