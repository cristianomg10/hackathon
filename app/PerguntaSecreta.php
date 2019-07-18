<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerguntaSecreta extends Model
{
    use SoftDeletes;
    protected $fillable =
        ['pergunta'];
}
