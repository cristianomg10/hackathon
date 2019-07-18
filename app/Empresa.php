<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{ use SoftDeletes;
    protected $fillable =
        ['razao_social','cnpj','area_de_atuacao','porte'];
}
