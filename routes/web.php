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
    return view('usuario.novo');
});
Route::get('/usuario', function () {
    return view('usuario.novo');
});

// Novo usuario
Route::get('/usuario/novo', 'UsuarioController@criar');
Route::post('/usuario/novo', 'UsuarioController@store')->name('salvar_usuario');

// Listar usuario
Route::get('/usuario/lista', 'UsuarioController@lista');

// Deletar usuario
Route::get('/usuario/deletar/{id}', 'UsuarioController@deletar')->name('excluir_usuario');

// Editar usuario
Route::get('/usuario/editar/{id}', 'UsuarioController@editar')->name('editar_usuario');
Route::post('/usuario/editar/{id}', 'UsuarioController@atualizar')->name('atualizar_usuario');
