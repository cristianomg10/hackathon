<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instituicao extends Model
{
    protected $table ="instituicao";
    protected $fillable = ['nome','nome_reduzido','id_cidade_reitoria'];
    use SoftDeletes;

}
