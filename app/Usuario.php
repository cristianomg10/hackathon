<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    protected $fillable =
        ['login','senha','email','id_pergunta_secreta','resposta_pergunta_secreta','perfil'];
}
