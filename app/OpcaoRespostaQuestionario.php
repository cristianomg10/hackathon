<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpcaoRespostaQuestionario extends Model
{
    use SoftDeletes;
    protected $fillable =
        ['opcao','id_pergunta'];
}
