<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Turmas=Turma::all();
        return view("turma.index")->with(['Turmas'=>$Turmas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("turma.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Turma::create($request->all());
        return redirect()->Route("turmas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Turma = Turma::find($id);
        return view("turma.show")->with(["Turma"=>$Turma]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Turma = Turma::find($id);
        return view ("turma.edit")->with(["Turma"=>$Turma]);
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
        $Turma = Turma::find($id)->update($request->all());
        return redirect()->Route("turmas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Turma::destroy($request->id);

        return redirect("/turmas");
    }
}
