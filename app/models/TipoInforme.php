<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TipoInforme extends Model
{

    protected $table = 'tipo_informe';


    protected $primaryKey = 'idtipo_informe';


    protected $fillable = ['nombre', 'eliminado', 'idusuario', 'created_at', 'updated_at'];

    public function usuario()
    {
        return $this->hasOne('App\User', 'idusuario', 'idusuario');
    }
}
