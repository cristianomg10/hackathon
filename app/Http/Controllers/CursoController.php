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


    public function create()
    {
        return view ("curso.create");
    }

    public function store(Request $request)
    {
        Curso::create($request->all());
        return redirect()->Route("cursos.index");
    }

    public function show($id)
    {
        $Curso = Curso::find($id);
        return view("curso.show")->with(["Curso"=>$Curso]);
    }

    public function edit($id)
    {
        $Curso = Curso::find($id);
        return view ("curso.edit")->with(["Curso"=>$Curso]);
    }


    public function update(Request $request, $id)
    {
        $Curso = Curso::find($id)->update($request->all());
        return redirect()->Route("cursos.index");
    }

    public function destroy(Request $request)
    {
        Curso::destroy($request->id);

        return redirect("/cursos");
    }
}
