<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;
    protected $fillable =
        ['id_instituicao','nome','turno','nivel','id_cidade','ano_inicial_oferta','semestre_inicial_oferta'];
}
