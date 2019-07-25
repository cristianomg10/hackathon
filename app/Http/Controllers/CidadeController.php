<?php

namespace App\Http\Controllers;

use App\cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index(){
        $cidades = cidade::query()->orderBy('nome')->get();
        return view('cidade/index',compact('cidades'));
    }

    public function create(){
        return view('cidade/create');
    }

    public function store(Request $request){
        $nome = $request->nome;
        $estado = $request->estado;
        $cidade = new Cidade();
        $cidade->nome=$nome;
        $cidade->estado=$estado;
        $cidade->save();

        return redirect('/cidade');


    }
    public function destroy(Request $request){
        Cidade::destroy($request->id);
        return redirect("/cidade");
    }
    public function edit($id){
        $cidade = Cidade::find($id);
        return view('/cidade/edit')->with('cidade',$cidade);
    }
    public function update(Request $request,$id){
        Cidade::find($id)->update($request->all());
        return redirect("/cidade");
    }
    public function show($id)
    {
        $cidade = Cidade::find($id);
        return view("/cidade/show")->with(['cidade'=>$cidade]);
    }






}
