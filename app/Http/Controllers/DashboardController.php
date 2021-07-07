<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Enquete;
use App\Estudante;
use App\Usuario;
use App\VagaEmprego;
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
    function getAllVagasMonths(){

        $vagas_meses_array=array();
        $datas_vagas = VagaEmprego::orderBy('created_at','ASC')->pluck('created_at');
        $datas_vagas = json_decode($datas_vagas);
        if(!empty($datas_vagas)){
            foreach($datas_vagas as $unf_datas){
                $datas = new DateTime($unf_datas);
                $mes_numero=$datas->format('m');
                $mes_nome=$datas->format('M');
                $vagas_meses_array[$mes_numero]=$mes_nome;

            }
            return(  $vagas_meses_array);
        }

    }
    function getAllEnquetesMonths(){

        $enquetes_meses_array=array();
        $datas_enquetes = Enquete::orderBy('created_at','ASC')->pluck('created_at');
        $datas_enquetes =json_decode($datas_enquetes);
        if(!empty($datas_enquetes)){
            foreach($datas_enquetes as $unf_datas){
                $datas = new DateTime($unf_datas);
                $mes_numero=$datas->format('m');
                $mes_nome=$datas->format('M');
                $enquetes_meses_array[$mes_numero]=$mes_nome;

            }
            return( $enquetes_meses_array);
        }

    }
    function getMonthlyUserIFSCCount($mes){
        $monthly_usuario_ifsc_count=Estudante::whereMonth('created_at',$mes)->where('id_instituicao',1)->get()->count();
        return $monthly_usuario_ifsc_count;
    }
    function getMonthlyUserIFCount($mes){
        $monthly_usuario_if_count=Estudante::whereMonth('created_at',$mes)->where('id_instituicao',2)->get()->count();
        return $monthly_usuario_if_count;
    }
    function getMonthlyEmpresaCount($mes){
        $monthly_empresa_count=Empresa::whereMonth('created_at',$mes)->get()->count();
        return $monthly_empresa_count;
    }
    function getMonthlyVagasCount($mes){
        $monthly_vaga_count=VagaEmprego::whereMonth('created_at',$mes)->get()->count();
        return $monthly_vaga_count;
    }
    function getMonthlyEnquetesCount($mes){
        $monthly_enquetes_count=Enquete::whereMonth('created_at',$mes)->get()->count();
        return $monthly_enquetes_count;
    }


    function getMonthlyAllData(){
        //PEGANDO DADOS DOS USUARIOS
        $monthly_usuario_ifsc_count_array=array();
        $monthly_usuario_if_count_array=array();
        $usuario_meses_array = $this->getAllUserMonths();
        $meses_nome_array =array();
        if(!empty($usuario_meses_array)){
            foreach($usuario_meses_array as $mes_numero=>$mes_nome){
                $monthly_usuario_ifsc_count=$this->getMonthlyUserIFSCCount($mes_numero);
                $monthly_usuario_if_count=$this->getMonthlyUserIFCount($mes_numero);
                array_push($monthly_usuario_ifsc_count_array,$monthly_usuario_ifsc_count);
                array_push($monthly_usuario_if_count_array,$monthly_usuario_if_count);
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
        //PEGANDO DADOS DAS VAGAS
        $monthly_vagas_count_array=array();
        $vagas_meses_array = $this->getAllVagasMonths();
        $meses_nome_vaga_array =array();
        if(!empty($vagas_meses_array)){
            foreach($vagas_meses_array as $mes_numero=>$mes_nome){
                $monthly_vaga_count=$this->getMonthlyVagasCount($mes_numero);
                array_push($monthly_vagas_count_array,$monthly_vaga_count);
                array_push($meses_nome_vaga_array,$mes_nome);
            }
        }
        //PEGANDO DADOS DAS ENQUETES
        $monthly_enquetes_count_array=array();
        $enquetes_meses_array = $this->getAllEnquetesMonths();
        $meses_nome_enquetes_array =array();
        if(!empty($enquetes_meses_array)){
            foreach($enquetes_meses_array as $mes_numero=>$mes_nome){
                $monthly_enquetes_count=$this->getMonthlyEnquetesCount($mes_numero);
                array_push($monthly_enquetes_count_array,$monthly_enquetes_count);
                array_push($meses_nome_enquetes_array,$mes_nome);
            }
        }


        $monthly_data_array=array(
            'meses_empresas' => $meses_nome_empresa_array,
            'empresas' =>  $monthly_empresa_count_array,
            'meses_vagas' => $meses_nome_vaga_array,
            'vagas' =>  $monthly_vagas_count_array,
            'meses_enquetes' => $meses_nome_enquetes_array,
            'enquetes' =>  $monthly_enquetes_count_array,
            'meses_usuarios' => $meses_nome_array,
            'usuarios_ifsc' =>  $monthly_usuario_ifsc_count_array,
            'usuarios_if' =>  $monthly_usuario_if_count_array,
            'total_usuarios'=> Estudante::count(),
            'total_empresas'=> Empresa::count(),
            'total_vagas'=> VagaEmprego::count(),
            'total_enquetes'=> Enquete::count(),
        );
        //return $monthly_usuario_data_array;



        return view('/dashboard')->with(['dados'=>$monthly_data_array]);
    }
}
