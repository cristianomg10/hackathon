<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
class TurmaController extends Controller
{

    public function index()
    {
        $Turmas=Turma::all();
        return view("turma.index")->with(['Turmas'=>$Turmas]);
    }


    public function create()
    {
        return view ("turma.create");
    }


    public function store(Request $request)
    {
        Turma::create($request->all());
        return redirect()->Route("turmas.index");
    }


    public function show($id)
    {
        $Turma = Turma::find($id);
        return view("turma.show")->with(["Turma"=>$Turma]);
    }

    public function edit($id)
    {
        $Turma = Turma::find($id);
        return view ("turma.edit")->with(["Turma"=>$Turma]);
    }

    public function update(Request $request, $id)
    {
        $Turma = Turma::find($id)->update($request->all());
        return redirect()->Route("turmas.index");
    }


    public function destroy(Request $request)
    {
        Turma::destroy($request->id);

        return redirect("/turmas");
    }
}
