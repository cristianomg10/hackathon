<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\PerguntaSecreta;
class UsuarioController extends Controller
{

    public function index()
    {
        $Usuarios=Usuario::all();
        return view("index")->with(['Usuarios'=>$Usuarios]);


    }

    public function create()
    {
        $Perguntas=PerguntaSecreta::all();
        return view ("create")->with(['Perguntas'=>$Perguntas]);
    }


    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->Route("index");
    }


    public function show($id)
    {
        $Usuario = Usuario::find($id);
        return view("show")->with(["Usuario"=>$Usuario]);
    }

    public function edit($id)
    {
        $Usuario = Usuario::find($id);
       return view ("edit")->with(["Usuario"=>$Usuario]);
    }

    public function update(Request $request, $id)
    {
        $Usuario = Usuario::find($id)->update($request->all());
        return redirect()->Route("index");

    }

    public function destroy(Request $request)
    {
      Usuario::destroy($request->id);

      return redirect("/usuario");
    }

}
