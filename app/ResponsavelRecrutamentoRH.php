<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResponsavelRecrutamentoRH extends Model
{
    protected $table ="responsavel_recrutamento_rh";
    protected $fillable = ['nome','telefone','id_empresa','email'];
    use SoftDeletes;
}
