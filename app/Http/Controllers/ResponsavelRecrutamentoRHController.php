<?php

namespace App\Http\Controllers;

use App\ResponsavelRecrutamentoRH;
use Illuminate\Http\Request;

class ResponsavelRecrutamentoRHController extends Controller
{
    public function index(){
        $ResponsavelRecrutamentoRHs = ResponsavelRecrutamentoRH::query()->orderBy('nome')->get();
        return view('responsavel_recrutamento_rh/index',['rrrhs'=>$ResponsavelRecrutamentoRHs]);
    }

    public function create(){
        return view('responsavel_recrutamento_rh/create');
    }

    public function store(Request $request){
        $nome = $request->nome;
        $id_empresa= $request->id_empresa;
        $telefone=$request->telefone;
        $email=$request->email;
        $rrrh = new ResponsavelRecrutamentoRH();
        $rrrh->nome=$nome;
        $rrrh->telefone=$telefone;
        $rrrh->email=$email;
        $rrrh->id_empresa=$id_empresa;

        $rrrh->save();

        return redirect('/responsavel_recrutamento_rh');


    }
    public function destroy(Request $request){
        ResponsavelRecrutamentoRH::destroy($request->id);
        return redirect("/responsavel_recrutamento_rh");
    }
    public function edit($id){
        $rrrh = ResponsavelRecrutamentoRH::find($id);
        return view('/responsavel_recrutamento_rh/edit')->with('rrrh',$rrrh);
    }
    public function update(Request $request,$id){
        ResponsavelRecrutamentoRH::find($id)->update($request->all());
        return redirect("/responsavel_recrutamento_rh");
    }
}
