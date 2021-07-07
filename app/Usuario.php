<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    protected $table ="usuario";
    use SoftDeletes;
    protected $fillable =
        ['login','senha','email','id_pergunta_secreta','resposta_pergunta_secreta','perfil'];

public function estudante(){
    return $this->hasOne('App\Estudante', 'id_usuario','id');
}
    public function empresa(){
        return $this->hasOne('App\Empresa', 'id_usuario','id');
    }
}

