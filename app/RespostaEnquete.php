<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RespostaEnquete extends Model
{
    protected $fillable = ['id_usuario','id_enquete','id_opcao_enquete'];
    use SoftDeletes;
}
