<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AbrangenciaEmpresa extends Model
{
    protected $table ="abrangencia_empresa";
    protected $fillable = ['id_empresa','id_cidade'];
    use SoftDeletes;
}
