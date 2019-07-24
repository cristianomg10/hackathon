<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquete extends Model
{
    use SoftDeletes;
    protected $fillable =
        ['pergunta','validade','id_usuario'];
}
