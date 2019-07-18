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
    return view('welcome');
});
Route::resource('/usuarios', 'UsuarioController' , ['except' => 'destroy']);

Route::delete('/usuarios/remover/{id}', "UsuarioController@destroy");

Route::resource('/cursos', 'CursoController' , ['except' => 'destroy']);

Route::delete('/cursos/remover/{id}', "CursoController@destroy");

Route::resource('/turmas', 'TurmaController' , ['except' => 'destroy']);

Route::delete('/turmas/remover/{id}', "TurmaController@destroy");

Route::resource('/perguntas', 'PerguntaSecretaController' , ['except' => 'destroy']);

Route::delete('/perguntas/remover/{id}', "PerguntaSecretaController@destroy");

Route::resource('/empresas', 'EmpresaController' , ['except' => 'destroy']);

Route::delete('/empresas/remover/{id}', "EmpresaController@destroy");