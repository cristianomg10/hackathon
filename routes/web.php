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
Route::resource('/usuario', 'UsuarioController' , ['except' => 'destroy']);

Route::delete('/usuario/remover/{id}', "UsuarioController@destroy");

Route::resource('/cursos', 'CursoController' , ['except' => 'destroy']);

Route::delete('/cursos/remover/{id}', "CursoController@destroy");

Route::resource('/turmas', 'TurmaController' , ['except' => 'destroy']);

Route::delete('/turmas/remover/{id}', "TurmaController@destroy");

Route::resource('/perguntas', 'PerguntaSecretaController' , ['except' => 'destroy']);

Route::delete('/perguntas/remover/{id}', "PerguntaSecretaController@destroy");

Route::resource('/empresas', 'EmpresaController' , ['except' => 'destroy']);

Route::delete('/empresas/remover/{id}', "EmpresaController@destroy");

Route::get('/cidade', 'CidadeController@index')->name("indexCidade");
Route::get('/cidade/create','CidadeController@create')->name("createCidade");
Route::post('/cidade/create','CidadeController@store')->name("storeCidade");
Route::post('/cidade/edit/{id}','CidadeController@edit')->name("editCidade");
Route::put('/cidade/update/{id}','CidadeController@update')->name("updateCidade");
Route::delete('/cidade/destroy/{id}','CidadeController@destroy')->name("destroyCidade");

Route::get('/instituicao', 'InstituicaoController@index')->name("indexInstituicao");
Route::get('/instituicao/create','InstituicaoController@create')->name("createInstituicao");
Route::post('/instituicao/create','InstituicaoController@store')->name("storeInstituicao");
Route::post('/instituicao/edit/{id}','InstituicaoController@edit')->name("editInstituicao");
Route::put('/instituicao/update/{id}','InstituicaoController@update')->name("updateInstituicao");
Route::delete('/instituicao/destroy/{id}','InstituicaoController@destroy')->name("destroyInstituicao");

Route::get('/estudante', 'EstudanteController@index')->name("indexEstudante");
Route::get('/estudante/create','EstudanteController@create')->name("createEstudante");;
Route::post('/estudante/create','EstudanteController@store')->name("storeEstudante");;
Route::post('/estudante/edit/{id}','EstudanteController@edit')->name("editEstudante");;
Route::put('/estudante/update/{id}','EstudanteController@update')->name("updateEstudante");;
Route::delete('/estudante/destroy/{id}','EstudanteController@destroy')->name("destroyEstudante");

Route::get('/abrangencia_empresa', 'AbrangenciaEmpresaController@index')->name("indexAbrangenciaEmpresa");
Route::get('/abrangencia_empresa/create','AbrangenciaEmpresaController@create')->name("createAbrangenciaEmpresa");
Route::post('/abrangencia_empresa/create','AbrangenciaEmpresaController@store')->name("storeAbrangenciaEmpresa");
Route::post('/abrangencia_empresa/edit/{id}','AbrangenciaEmpresaController@edit')->name("editAbrangenciaEmpresa");
Route::put('/abrangencia_empresa/update/{id}','AbrangenciaEmpresaController@update')->name("updateAbrangenciaEmpresa");
Route::delete('/abrangencia_empresa/destroy/{id}','AbrangenciaEmpresaController@destroy')->name("destroyAbrangenciaEmpresa");

Route::get('/responsavel_recrutamento_rh', 'ResponsavelRecrutamentoRHController@index')->name("indexResponsavelRecrutamentoRH");
Route::get('/responsavel_recrutamento_rh/create','ResponsavelRecrutamentoRHController@create')->name("createResponsavelRecrutamentoRH");
Route::post('/responsavel_recrutamento_rh/create','ResponsavelRecrutamentoRHController@store')->name("storeResponsavelRecrutamentoRH");
Route::post('/responsavel_recrutamento_rh/edit/{id}','ResponsavelRecrutamentoRHController@edit')->name("editResponsavelRecrutamentoRH");
Route::put('/responsavel_recrutamento_rh/update/{id}','ResponsavelRecrutamentoRHController@update')->name("updateResponsavelRecrutamentoRH");
Route::delete('/responsavel_recrutamento_rh/destroy/{id}','ResponsavelRecrutamentoRHController@destroy')->name("destroyResponsavelRecrutamentoRH");
