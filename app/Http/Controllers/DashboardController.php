<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Estudante;
use App\Usuario;
use Illuminate\Http\Request;
use DateTime;

class DashboardController extends Controller
{
    function getAllUserMonths(){

        $usuario_meses_array=array();
        $datas_usuarios = Estudante::orderBy('created_at','ASC')->pluck('created_at');
        $datas_usuarios=json_decode($datas_usuarios);
        if(!empty($datas_usuarios)){
            foreach($datas_usuarios as $unf_datas){
                $datas = new DateTime($unf_datas);
                $mes_numero=$datas->format('m');
                $mes_nome=$datas->format('M');
                $usuario_meses_array[$mes_numero]=$mes_nome;

            }
            return($usuario_meses_array);
        }

    }
    function getAllEmpresasMonths(){

        $empresas_meses_array=array();
        $datas_empresas = Empresa::orderBy('created_at','ASC')->pluck('created_at');
        $datas_empresas=json_decode($datas_empresas);
        if(!empty($datas_empresas)){
            foreach($datas_empresas as $unf_datas){
                $datas = new DateTime($unf_datas);
                $mes_numero=$datas->format('m');
                $mes_nome=$datas->format('M');
                $empresas_meses_array[$mes_numero]=$mes_nome;

            }
            return( $empresas_meses_array);
        }

    }
    function getMonthlyUserCount($mes){
        $monthly_usuario_count=Estudante::whereMonth('created_at',$mes)->get()->count();
        return $monthly_usuario_count;
    }
    function getMonthlyEmpresaCount($mes){
        $monthly_empresa_count=Empresa::whereMonth('created_at',$mes)->get()->count();
        return $monthly_empresa_count;
    }


    function getMonthlyAllData(){
        //PEGANDO DADOS DOS USUARIOS
        $monthly_usuario_count_array=array();
        $usuario_meses_array = $this->getAllUserMonths();
        $meses_nome_array =array();
        if(!empty($usuario_meses_array)){
            foreach($usuario_meses_array as $mes_numero=>$mes_nome){
                $monthly_usuario_count=$this->getMonthlyUserCount($mes_numero);
                array_push($monthly_usuario_count_array,$monthly_usuario_count);
                array_push($meses_nome_array,$mes_nome);
            }
        }
        //PEGANDO DADOS DAS EMPRESAS
        $monthly_empresa_count_array=array();
        $empresas_meses_array = $this->getAllEmpresasMonths();
        $meses_nome_empresa_array =array();
        if(!empty($empresas_meses_array)){
            foreach($empresas_meses_array as $mes_numero=>$mes_nome){
                $monthly_empresa_count=$this->getMonthlyEmpresaCount($mes_numero);
                array_push($monthly_empresa_count_array,$monthly_empresa_count);
                array_push($meses_nome_empresa_array,$mes_nome);
            }
        }

        $monthly_data_array=array(
            'meses_empresas' => $meses_nome_empresa_array,
            'empresas' =>  $monthly_empresa_count_array,
            'meses_usuarios' => $meses_nome_array,
            'usuarios' =>  $monthly_usuario_count_array,
        );
        //return $monthly_usuario_data_array;



        return view('/dashboard')->with(['dados'=>$monthly_data_array]);
    }
}
