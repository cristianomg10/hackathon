<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostagemForum extends Model
{
    use SoftDeletes;
    protected $fillable =
        ['titulo','postagem','status','ultima_atualizacao','id_postagem','id_usuario'];
}
