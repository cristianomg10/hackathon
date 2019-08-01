<?php

namespace App\Http\Controllers;

use App\Enquete;
use App\RespostaEnquete;
use Illuminate\Http\Request;


class timeLineController extends Controller
{
    public function index()
    {
       $enquete= Enquete::all()->sortByDesc('created_at')->first()->get();
       dd($enquete);
       $opcoes=RespostaEnquete::where('id_enquete','=',$enquete->id)->get();
        return view('timeLine.index',compact('enquete','opcoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('timeLine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sair(Request $request)
    {
        $request->session()->remove("Usuario");
        return redirect("/");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
