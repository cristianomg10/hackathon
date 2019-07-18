<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\PerguntaSecreta;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->Route("usuarios.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Usuario = Usuario::find($id);
        return view("show")->with(["Usuario"=>$Usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Usuario = Usuario::find($id);
       return view ("edit")->with(["Usuario"=>$Usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Usuario = Usuario::find($id)->update($request->all());
        return redirect()->Route("usuarios.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      Usuario::destroy($request->id);

      return redirect("/usuarios");
    }

}
