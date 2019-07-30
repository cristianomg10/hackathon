<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudante extends Model
{
    protected $table ="estudante";
    protected $fillable = ['nome','id_turma_curso','id_instituicao'];
    protected $hidden = ['id_usuario'];
    use SoftDeletes;
}
