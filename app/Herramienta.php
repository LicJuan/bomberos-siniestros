<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'estado'
    ];

    public function tipoHerramienta() {
        return $this->belongsTo(TipoHerramienta::class);
    }

}
