<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\PerguntaSecreta;
use App\User;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class UsuarioController extends Controller
{

    public function index()
    {
        $Usuarios=Usuario::all();
        return view("usuario.index")->with(['Usuarios'=>$Usuarios]);


    }

    public function create(Request $request)
    {
        $tipo=$request->tipo;
        $usuario=$request->session()->get('Usuario');
        $Perguntas=PerguntaSecreta::all();
        return view ("/usuario/create")->with(['Perguntas'=>$Perguntas,'Usuario'=>$usuario,'tipo'=>$tipo]);
}


    public function store(Request $request)
    {
       $usuario= Usuario::create($request->all());
        $Usuario=$request->session()->put('Usuario',$usuario);
        $tipo=$request->tipo;
        if($tipo==1){
            return view('estudante.create',compact('usuario'));
        }

        return view("empresa.create",compact('usuario'));
    }


    public function show($id)
    {
        $Usuario = Usuario::find($id);
        return view("/usuario/show")->with(["Usuario"=>$Usuario]);
    }

    public function edit($id)
    {
        $Usuario = Usuario::find($id);
       return view ("/usuario/edit")->with(["Usuario"=>$Usuario]);
    }

    public function update(Request $request, $id)
    {
        $Usuario = Usuario::find($id);
        $Usuario->update($request->all());
        $request->session()->put("Usuario",$Usuario);
        $usuario = $request->session()->get("Usuario");

        if($Usuario->perfil==1){
            return view("timeLine/index",compact("usuario"));
        }
        return redirect()->Route("usuario.index");

    }

    public function destroy(Request $request)
    {
      Usuario::destroy($request->id);

      return redirect("/usuario");
    }

}
