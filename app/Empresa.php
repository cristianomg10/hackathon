<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{ use SoftDeletes;
    protected $table ="empresas";
    protected $fillable = ['razao_social','cnpj','area_de_atuacao','porte'];
    protected $hidden = ['id_usuario'];
    public function usuario(){
        return $this->belongsTo("App\Usuario",'id_usuario','id');
    }
}
