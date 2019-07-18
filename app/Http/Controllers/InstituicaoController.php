<?php

namespace App\Http\Controllers;

use App\instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function index(){
        $instituicaos = instituicao::query()->orderBy('nome')->get();
        return view('instituicao/index',compact('instituicaos'));
    }

    public function create(){
        return view('instituicao/create');
    }

    public function store(Request $request){
        $nome = $request->nome;
        $nome_reduzido= $request->nome_reduzido;
        $id_cidade_reitoria=$request->id_cidade_reitoria;
        $instituicao = new Instituicao();
        $instituicao->nome=$nome;
        $instituicao->nome_reduzido=$nome_reduzido;
        $instituicao->id_cidade_reitoria=$id_cidade_reitoria;

        $instituicao->save();

        return redirect('/instituicao');


    }
    public function destroy(Request $request){
        Instituicao::destroy($request->id);
        return redirect("/instituicao");
    }
    public function edit($id){
        $instituicao = Instituicao::find($id);
        return view('/instituicao/edit')->with('instituicao',$instituicao);
    }
    public function update(Request $request,$id){
        Instituicao::find($id)->update($request->all());
        return redirect("/instituicao");
    }

}
