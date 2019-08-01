<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VagaEmprego;
use App\ResponsavelRecrutamentoRH;
use Illuminate\Support\Facades\Input;
use File;
class VagaEmpregoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Vagas=VagaEmprego::all();
        return view("vaga.index")->with(['Vagas'=>$Vagas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Recrutadores=ResponsavelRecrutamentoRH::all();
        return view ("vaga.create")->with(['Recrutadores'=>$Recrutadores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaga = VagaEmprego::create($request->all());
        $imagem = Input::file('imagem');
        $extensao=$imagem->getClientOriginalExtension();
        $imagem=File::move($imagem,public_path().'/imagem-vaga/vaga-id'.$vaga->id.'.'.$extensao);
        $vaga->imagem='imagem-vaga/vaga-id'.$vaga->id.'.'.$extensao;
        $vaga->save();
        return redirect()->Route("vagas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Vagas = VagaEmprego::find($id);
        return view("vaga.show")->with(["Vagas"=>$Vagas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Vagas = VagaEmprego::find($id);
        $Recrutadores = ResponsavelRecrutamentoRH::all();
        return view("vaga.edit")->with(["Vagas"=>$Vagas],["Recrutadores"=>$Recrutadores]);
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
        $Vagas = VagaEmprego::find($id)->update($request->all());
        return redirect()->Route("vagas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        VagaEmprego::destroy($request->id);

        return redirect("/vagas");
    }
}
