<?php

namespace App\Http\Controllers;

use App\AbrangenciaEmpresa;
use Illuminate\Http\Request;

class AbrangenciaEmpresaController extends Controller
{
    public function index(){
        $abrangenciaempresas = AbrangenciaEmpresa::query()->orderBy('id')->get();
        return view('abrangencia_empresa/index',compact('abrangenciaempresas'));
    }

    public function create(){
        return view('abrangencia_empresa/create');
    }

    public function store(Request $request){
        $id_cidade= $request->id_cidade;
        $id_empresa = $request->id_empresa;
        $abrangenciaempresas = new AbrangenciaEmpresa();
        $abrangenciaempresas->id_cidade=$id_cidade;
        $abrangenciaempresas->id_empresa=$id_empresa;
        $abrangenciaempresas->save();



        return redirect('/abrangencia_empresa');


    }
    public function destroy(Request $request){
         AbrangenciaEmpresa::destroy($request->id);
        return redirect("/abrangencia_empresa");
    }
    public function edit($id){
        $abrangenciaempresas = AbrangenciaEmpresa::find($id);
        return view('/abrangencia_empresa/edit')->with('abrangenciaempresas',$abrangenciaempresas);
    }
    public function update(Request $request,$id){
        AbrangenciaEmpresa::find($id)->update($request->all());
        return redirect("/abrangencia_empresa");
    }
}
