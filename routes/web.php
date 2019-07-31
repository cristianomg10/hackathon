<?php
use App\Usuario;
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


Route::get('/','InicioController@index')->name('/');
Route::post('/login','InicioController@entrar')->name('login');
Route::get('/inicio','InicioController@inicio')->name('inicio');
Route::get('/dashboard', 'DashboardController@getMonthlyAllData');
Route::post('/empresas/create/{id_usuario}', "EmpresaController@create");


Route::resource('/usuario', 'UsuarioController' , ['except' => 'destroy']);
Route::delete('/usuario/remover/{id}', "UsuarioController@destroy");

Route::resource('/cursos', 'CursoController' , ['except' => 'destroy']);
Route::delete('/cursos/remover/{id}', "CursoController@destroy");

Route::resource('/turmas', 'TurmaController' , ['except' => 'destroy']);
Route::delete('/turmas/remover/{id}', "TurmaController@destroy");

Route::resource('/perguntas', 'PerguntaSecretaController' , ['except' => 'destroy']);
Route::delete('/perguntas/remover/{id}', "PerguntaSecretaController@destroy");

Route::resource('/empresas', 'EmpresaController' , ['except' => 'destroy','create']);
Route::delete('/empresas/remover/{id}', "EmpresaController@destroy");

Route::resource('/vagas', 'VagaEmpregoController' , ['except' => 'destroy']);
Route::delete('/vagas/remover/{id}', "VagaEmpregoController@destroy");

Route::resource('/enquetes', 'EnqueteController' , ['except' => 'destroy']);
Route::delete('/enquetes/remover/{id}', "EnqueteController@destroy");

Route::resource('/postagens', 'PostagemForumController' , ['except' => 'destroy']);
Route::delete('/postagens/remover/{id}', "PostagemForumController@destroy");

Route::resource('/opcoes', 'OpcaoRespostaEnqueteController' , ['except' => 'destroy']);
Route::delete('/opcoes/remover/{id}', "OpcaoRespostaEnqueteController@destroy");

Route::resource('/respostas', 'RespostaEnqueteController' , ['except' => 'destroy']);
Route::delete('/respostas/remover/{id}', "RespostaEnqueteController@destroy");

Route::resource('/questionarios', 'QuestionariosController' , ['except' => 'destroy']);
Route::delete('/questionarios/remover/{id}', "QuestionariosController@destroy");

Route::resource('/alvos', 'CursoAlvoVagaController' , ['except' => 'destroy']);
Route::delete('/alvos/remover/{id}', "CursoAlvoVagaController@destroy");

Route::resource('/opcaoRespostas', 'OpcaoRespostaQuestionarioController' , ['except' => 'destroy']);
Route::delete('/opcaoRespostas/remover/{id}', "OpcaoRespostaQuestionarioController@destroy");

Route::get('/timeline','timeLineController@sair');

Route::get('/cidade', 'CidadeController@index')->name("indexCidade");
Route::get('/cidade/create','CidadeController@create')->name("createCidade");
Route::post('/cidade/create','CidadeController@store')->name("storeCidade");
Route::post('/cidade/edit/{id}','CidadeController@edit')->name("editCidade");
Route::post('/cidade/show/{id}','CidadeController@show')->name("showCidade");
Route::put('/cidade/update/{id}','CidadeController@update')->name("updateCidade");
Route::delete('/cidade/destroy/{id}','CidadeController@destroy')->name("destroyCidade");

Route::get('/instituicao', 'InstituicaoController@index')->name("indexInstituicao");
Route::get('/instituicao/create','InstituicaoController@create')->name("createInstituicao");
Route::post('/instituicao/create','InstituicaoController@store')->name("storeInstituicao");
Route::post('/instituicao/edit/{id}','InstituicaoController@edit')->name("editInstituicao");
Route::post('/instituicao/show/{id}','InstituicaoController@show')->name("showInstituicao");
Route::put('/instituicao/update/{id}','InstituicaoController@update')->name("updateInstituicao");
Route::delete('/instituicao/destroy/{id}','InstituicaoController@destroy')->name("destroyInstituicao");

Route::get('/estudante', 'EstudanteController@index')->name("indexEstudante");
Route::post('/estudante/create/{id_usuario}','EstudanteController@create')->name("createEstudante");;
Route::post('/estudante/create','EstudanteController@store')->name("storeEstudante");;
Route::post('/estudante/edit/{id}','EstudanteController@edit')->name("editEstudante");;
Route::post('/estudante/show/{id}','EstudanteController@show')->name("showEstudante");;
Route::put('/estudante/update/{id}','EstudanteController@update')->name("updateEstudante");;
Route::delete('/estudante/destroy/{id}','EstudanteController@destroy')->name("destroyEstudante");

Route::get('/abrangencia_empresa', 'AbrangenciaEmpresaController@index')->name("indexAbrangenciaEmpresa");
Route::get('/abrangencia_empresa/create','AbrangenciaEmpresaController@create')->name("createAbrangenciaEmpresa");
Route::post('/abrangencia_empresa/create','AbrangenciaEmpresaController@store')->name("storeAbrangenciaEmpresa");
Route::post('/abrangencia_empresa/edit/{id}','AbrangenciaEmpresaController@edit')->name("editAbrangenciaEmpresa");
Route::post('/abrangencia_empresa/show/{id}','AbrangenciaEmpresaController@show')->name("showAbrangenciaEmpresa");
Route::put('/abrangencia_empresa/update/{id}','AbrangenciaEmpresaController@update')->name("updateAbrangenciaEmpresa");
Route::delete('/abrangencia_empresa/destroy/{id}','AbrangenciaEmpresaController@destroy')->name("destroyAbrangenciaEmpresa");

Route::get('/responsavel_recrutamento_rh', 'ResponsavelRecrutamentoRHController@index')->name("indexResponsavelRecrutamentoRH");
Route::get('/responsavel_recrutamento_rh/create','ResponsavelRecrutamentoRHController@create')->name("createResponsavelRecrutamentoRH");
Route::post('/responsavel_recrutamento_rh/create','ResponsavelRecrutamentoRHController@store')->name("storeResponsavelRecrutamentoRH");
Route::post('/responsavel_recrutamento_rh/edit/{id}','ResponsavelRecrutamentoRHController@edit')->name("editResponsavelRecrutamentoRH");
Route::post('/responsavel_recrutamento_rh/show/{id}','ResponsavelRecrutamentoRHController@show')->name("showResponsavelRecrutamentoRH");
Route::put('/responsavel_recrutamento_rh/update/{id}','ResponsavelRecrutamentoRHController@update')->name("updateResponsavelRecrutamentoRH");
Route::delete('/responsavel_recrutamento_rh/destroy/{id}','ResponsavelRecrutamentoRHController@destroy')->name("destroyResponsavelRecrutamentoRH");


