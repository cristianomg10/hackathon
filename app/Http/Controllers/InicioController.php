<?php

namespace App\Http\Controllers;

use App\Enquete;
use App\OpcaoRespostaEnquete;
use App\PostagemForum;
use App\RespostaEnquete;
use App\Usuario;
use App\VagaEmprego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function index(Request $request)
    {
        $mensagem = $request->session()->get("mensagem");
        $Cadastro= $request->session()->get('mensagemCadastro');
        return view("welcome",compact(["mensagem"],["Cadastro"]));
    }
    public function inicio()
    {
        $postagem = PostagemForum::find(1);
        $usuario = session()->get("Usuario");
        $enquete= Enquete::find(7);
        $opcoes=OpcaoRespostaEnquete::where('id_enquete','=',$enquete->id)->get();
        $vaga=VagaEmprego::find(3);
        $Postagem=PostagemForum::where('id_postagem','=',1)->get();

        return view("timeLine.index",compact("usuario","opcoes","enquete",'vaga','postagem','Postagem'));
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

               return redirect("inicio");
           }
           $request->session()->flash("mensagem","Usuario ou senha incorretos");
           return redirect()->back();
       }
        $request->session()->flash("mensagem","Usuario não cadastrado");
        return redirect()->back();
    }






}
