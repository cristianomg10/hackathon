<?php

namespace App\Http\Controllers;

use App\OpcaoRespostaEnquete;
use Illuminate\Http\Request;

class OpcaoRespostaEnqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Opcao=OpcaoRespostaEnquete::all();
        return view("opcao.index")->with(['Opcao'=>$Opcao]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("opcao.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OpcaoRespostaEnquete::create($request->all());
        return redirect()->Route("opcoes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Opcao = OpcaoRespostaEnquete::find($id);
        return view("opcao.show")->with(["Opcao"=>$Opcao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Opcao = OpcaoRespostaEnquete::find($id);
        return view("opcao.edit")->with(["Opcao"=>$Opcao]);
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
        $Pergunta = OpcaoRespostaEnquete::find($id)->update($request->all());
        return redirect()->Route("opcoes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        OpcaoRespostaEnquete::destroy($request->id);

        return redirect("/opcoes");
    }
}
