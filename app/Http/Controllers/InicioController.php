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

    public function entrar(Request $request)
    {

        $Usuarios=Usuario::all();

        $teste = $request->only(['email', 'password']);
        foreach ($Usuarios as $usuario){
            if($usuario->login==$request->email){
                if ($usuario->senha==$request->password){
                    $request->session()->put("Usuario",$usuario);
                    $Usuario = $request->session()->get("Usuario");
                    return view("timeLine.index",compact("Usuario"));
                }
            }
        }
        $request->session()->flash("mensagem","Usuario ou senha incorretos");
        return redirect()->back();

        }


}
