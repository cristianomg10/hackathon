<?php

namespace App\Http\Controllers;

use App\PostagemForum;
use App\Usuario;
use Illuminate\Http\Request;

class PostagemForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Postagem=PostagemForum::all();
        return view("postagem.index")->with(['Postagem'=>$Postagem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Postagem=PostagemForum::all();
        $Usuarios=Usuario::all();
        $usuario=session()->get('Usuario');
        return view ("postagem.create")->with(['Usuarios'=>$Usuarios,'Postagens'=>$Postagem,'usuario'=>$usuario]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PostagemForum::create($request->all());


        return redirect()->Route("inicio");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Postagem = PostagemForum::find($id);
        return view("postagem.show")->with(["Postagem"=>$Postagem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Postagem = PostagemForum::find($id);
        return view("postagem.edit")->with(["Postagem"=>$Postagem]);
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
        $Enquetes = PostagemForum::find($id)->update($request->all());
        return redirect()->Route("postagens.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        PostagemForum::destroy($request->id);

        return redirect("/postagens");
    }
}
