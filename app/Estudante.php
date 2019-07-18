<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudante extends Model
{
    protected $table ="estudante";
    protected $fillable = ['nome','id_usuario','id_turma_curso'];
    use SoftDeletes;
}
