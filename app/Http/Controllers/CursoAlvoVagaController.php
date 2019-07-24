<?php

namespace App\Http\Controllers;

use App\CursoAlvoVaga;
use Illuminate\Http\Request;

class CursoAlvoVagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Alvos=CursoAlvoVaga::all();
       return view('alvo.index')->with(["Alvos"=>$Alvos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('alvo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CursoAlvoVaga::create($request->all());
        return redirect()->Route("alvos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $Alvos=CursoAlvoVaga::find($id);
       return view('alvo.show')->with(["Alvos"=>$Alvos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Alvos = CursoAlvoVaga::find($id);
        return view("curso.edit")->with(["Alvos"=>$Alvos]);
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
        $Alvos = CursoAlvoVaga::find($id)->update($request->all());
        return redirect()->Route("alvos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)

    {
        CursoAlvoVaga::destroy($request->id);
        return redirect("/alvos");
    }
}
