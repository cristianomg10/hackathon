<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
class EmpresaController extends Controller
{

    public function index()
    {
        $Empresas=Empresa::all();
        return view("empresa/index")->with(['Empresas'=>$Empresas]);
    }


    public function create(int $id_usuario)
    {
        return view ("empresa/create")->with(["id_usuario"=>$id_usuario]);
    }


    public function store(Request $request)
    {
        $Empresa = Empresa::create($request->all());
        $Empresa->id_usuario=$request->id_usuario;
        $Empresa->save();
        return redirect()->Route("empresas.index");
    }


    public function show($id)
    {
        $Empresa = Empresa::find($id);
        return view("empresa.show")->with(["Empresa"=>$Empresa]);
    }


    public function edit($id)
    {
        $Empresa = Empresa::find($id);
        return view("empresa/edit")->with(["Empresa"=>$Empresa]);
    }

    public function update(Request $request, $id)
    {
        $Empresa = Empresa::find($id)->update($request->all());
        return redirect()->Route("empresas.index");
    }

    public function destroy(Request $request)
    {
        Empresa::destroy($request->id);
        return redirect("/empresas");
    }
}
