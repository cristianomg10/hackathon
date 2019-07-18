<?php

namespace App\Http\Controllers;
use App\PerguntaSecreta;
use Illuminate\Http\Request;

class PerguntaSecretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Perguntas=PerguntaSecreta::all();
        return view("pergunta.index")->with(['Perguntas'=>$Perguntas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("pergunta.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       PerguntaSecreta::create($request->all());
        return redirect()->Route("perguntas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pergunta = PerguntaSecreta::find($id);
        return view("pergunta.show")->with(["Pergunta"=>$Pergunta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Pergunta = PerguntaSecreta::find($id);
        return view ("pergunta.edit")->with(["Pergunta"=>$Pergunta]);
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
        $Pergunta = PerguntaSecreta::find($id)->update($request->all());
        return redirect()->Route("perguntas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       PerguntaSecreta::destroy($request->id);

        return redirect("/perguntas");
    }
}
