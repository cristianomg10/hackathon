<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
class CursoController extends Controller
{

    public function index()
    {
        $Cursos=Curso::all();
        return view("curso.index")->with(['Cursos'=>$Cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("curso.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Curso::create($request->all());
        return redirect()->Route("cursos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Curso = Curso::find($id);
        return view("curso.show")->with(["Curso"=>$Curso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Curso = Curso::find($id);
        return view ("curso.edit")->with(["Curso"=>$Curso]);
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
        $Curso = Curso::find($id)->update($request->all());
        return redirect()->Route("cursos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Curso::destroy($request->id);

        return redirect("/cursos");
    }
}
