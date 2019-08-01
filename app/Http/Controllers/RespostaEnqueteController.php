<?php

namespace App\Http\Controllers;

use App\RespostaEnquete;
use Illuminate\Http\Request;

class RespostaEnqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Resposta=RespostaEnquete::all();
        return view("resposta.index")->with(['Resposta'=>$Resposta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enquete=session()->get('enq');
        return view ("resposta.create",compact('enquete'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RespostaEnquete::create($request->all());
        return redirect()->Route("respostas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Resposta = RespostaEnquete::find($id);
        return view("resposta.show")->with(["Resposta"=>$Resposta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $Resposta = RespostaEnquete::find($id);
        return view("resposta.edit")->with(["Resposta"=>$Resposta]);
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
        $Pergunta = RespostaEnquete::find($id)->update($request->all());
        return redirect()->Route("respostas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       RespostaEnquete::destroy($request->id);

        return redirect("/respostas");
    }
}
