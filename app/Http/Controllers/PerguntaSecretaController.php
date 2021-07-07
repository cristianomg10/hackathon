<?php

namespace App\Http\Controllers;
use App\PerguntaSecreta;
use Illuminate\Http\Request;

class PerguntaSecretaController extends Controller
{

    public function index()
    {
        $Perguntas=PerguntaSecreta::all();
        return view("pergunta.index")->with(['Perguntas'=>$Perguntas]);
    }

    public function create()
    {
        return view ("pergunta.create");
    }

    public function store(Request $request)
    {
       PerguntaSecreta::create($request->all());
        return redirect()->Route("perguntas.index");
    }


    public function show($id)
    {
        $Pergunta = PerguntaSecreta::find($id);
        return view("pergunta.show")->with(["Pergunta"=>$Pergunta]);
    }

    public function edit($id)
    {
        $Pergunta = PerguntaSecreta::find($id);
        return view ("pergunta.edit")->with(["Pergunta"=>$Pergunta]);
    }

    public function update(Request $request, $id)
    {
        $Pergunta = PerguntaSecreta::find($id)->update($request->all());
        return redirect()->Route("perguntas.index");
    }

    public function destroy(Request $request)
    {
       PerguntaSecreta::destroy($request->id);

        return redirect("/perguntas");
    }
}
