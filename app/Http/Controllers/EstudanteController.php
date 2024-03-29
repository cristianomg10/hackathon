<?php

namespace App\Http\Controllers;

use App\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function index(){
        $estudantes = Estudante::query()->orderBy('nome')->get();
        return view('estudante/index',compact('estudantes'));
    }

    public function create(int $id_usuario)
    {
        return view ("estudante/create")->with(["id_usuario"=>$id_usuario]);
    }

    public function store(Request $request){
        $nome = $request->nome;

        $id_turma_curso=$request->id_turma_curso;
        $estudante = new Estudante();
        $estudante->nome=$nome;
        $estudante->id_turma_curso=$id_turma_curso;
        $estudante->id_instituicao=$request->id_instituicao;
        $estudante->id_usuario=$request->id_usuario;
        $estudante->save();
        $request->session()->flash(
            'mensagemCadastro',
            "Usuario cadastrado com sucesso, faça seu login"
        );
        return redirect('/');


    }
    public function destroy(Request $request){
        Estudante::destroy($request->id);
        return redirect("/estudante");
    }
    public function edit($id){
        $estudante = Estudante::find($id);
        return view('/estudante/edit')->with('estudante',$estudante);
    }
    public function update(Request $request,$id){
        Estudante::find($id)->update($request->all());
        return redirect("/estudante");
    }
    public function show($id)
    {
        $estudante = Estudante::find($id);
        return view("estudante/show")->with(['estudante'=>$estudante]);
    }
}
