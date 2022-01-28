<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHerramienta extends Model
{
    protected $fillable = [
        'descripcion'
    ];

    public function herramientas() {
        return $this->hasMany(Herramienta::class);
    }

}
