<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function index(Request $request)
    {
        $mensagem = $request->session()->get("mensagem");
        return view("welcome",compact(["mensagem"]));
    }
    public function inicio()
    {

        $usuario = session()->get("Usuario");
        return view("timeLine.index",compact("usuario"));
    }

    public function entrar(Request $request)
    {

        $Usuarios=Usuario::all();

        $teste = $request->only(['email', 'password']);
       $Usuario= Usuario::where('email','=',$request->email)->get();
       if(!$Usuario->isEmpty()){
           $Usuario=$Usuario[0];

           if ($Usuario->senha==$request->password){
               $request->session()->put("Usuario",$Usuario);
               $usuario = $request->session()->get("Usuario");
               return view("timeLine.index",compact("usuario"));
           }
           $request->session()->flash("mensagem","Usuario ou senha incorretos");
           return redirect()->back();
       }
        $request->session()->flash("mensagem","Usuario não cadastrado");
        return redirect()->back();
    }






}
