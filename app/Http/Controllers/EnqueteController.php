<?php

namespace App\Http\Controllers;

use App\Enquete;
use App\Usuario;
use Illuminate\Http\Request;

class EnqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Enquetes=Enquete::all();
        return view("enquete.index")->with(['Enquetes'=>$Enquetes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Usuarios=Usuario::all();
        return view ("enquete.create")->with(['Usuarios'=>$Usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Enquete::create($request->all());
        return redirect()->Route("enquetes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Enquetes = Enquete::find($id);
        return view("enquete.show")->with(["Enquetes"=>$Enquetes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Enquetes = Enquete::find($id);
        return view("enquete.edit")->with(["Enquetes"=>$Enquetes]);
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
        $Enquetes = Enquete::find($id)->update($request->all());
        return redirect()->Route("enquetes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       Enquete::destroy($request->id);

        return redirect("/enquetes");
    }
}
