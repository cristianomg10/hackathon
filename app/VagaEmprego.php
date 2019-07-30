<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VagaEmprego extends Model
{
    use SoftDeletes;
    protected $fillable =
        ['titulo','texto','imagem','validade','id_recrutador'];
}
