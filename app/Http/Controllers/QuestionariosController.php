<?php

namespace App\Http\Controllers;

use App\Enquete;
use App\Questionario;
use Illuminate\Http\Request;

class QuestionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Questionario=Questionario::all();
        return view("questionario.index")->with(['Questionarios'=>$Questionario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ("questionario.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Questionario::create($request->all());
        return redirect()->Route("questionarios.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Questionarios = Questionario::find($id);
        return view("questionario.show")->with(["Questionarios"=>$Questionarios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Questionarios = Questionario::find($id);
        return view("questionario.edit")->with(["Questionarios"=>$Questionarios]);
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
        $Questionarios = Questionario::find($id)->update($request->all());
        return redirect()->Route("questionarios.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Questionario::destroy($request->id);

        return redirect("/questionarios");
    }
}
