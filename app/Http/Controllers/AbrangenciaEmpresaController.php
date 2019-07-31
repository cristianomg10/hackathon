<?php

namespace App\Http\Controllers;

use App\AbrangenciaEmpresa;
use Illuminate\Http\Request;
use App\Cidade;
class AbrangenciaEmpresaController extends Controller
{
    public function index()
    {
        $usuario = session()->get('Usuario');
        if ($usuario->perfil == 3) {
            $abrangenciaempresas = AbrangenciaEmpresa::query()->orderBy('id')->get();

        } else {
            $abrangenciaempresas = AbrangenciaEmpresa::where('id_empresa','=', $usuario->empresa->id)->get();

        }
        return view('abrangencia_empresa/index', compact('abrangenciaempresas'));
    }

    public function create(){
        $cidades=Cidade::all();
        $abrangencia=session()->get('Usuario');
        return view('abrangencia_empresa/create',compact('abrangencia',"cidades"));
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
    public function show($id)
    {
        $abrangenciaempresas = AbrangenciaEmpresa::find($id);
        return view("abrangencia_empresa/show")->with(['abrangenciaempresas'=>$abrangenciaempresas]);
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
