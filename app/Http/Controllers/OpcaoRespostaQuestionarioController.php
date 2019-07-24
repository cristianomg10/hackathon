<?php

namespace App\Http\Controllers;

use App\OpcaoRespostaEnquete;
use App\OpcaoRespostaQuestionario;
use Illuminate\Http\Request;

class OpcaoRespostaQuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Opcao=OpcaoRespostaQuestionario::all();
        return view("opcaoResposta.index")->with(['Opcao'=>$Opcao]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("opcaoResposta.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OpcaoRespostaQuestionario::create($request->all());
        return redirect()->Route("opcaoRespostas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Opcao = OpcaoRespostaQuestionario::find($id);
        return view("opcaoResposta.show")->with(["Opcao"=>$Opcao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Opcao = OpcaoRespostaQuestionario::find($id);
        return view("opcaoResposta.edit")->with(["Opcao"=>$Opcao]);
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
        $Pergunta = OpcaoRespostaQuestionario::find($id)->update($request->all());
        return redirect()->Route("opcaoRespostas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        OpcaoRespostaQuestionario::destroy($request->id);

        return redirect("/opcaoRespostas");
    }
}
