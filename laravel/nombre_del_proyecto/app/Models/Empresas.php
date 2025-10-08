<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = 'empresas';

    public function empleados()
    {
        return $this->hasMany(Empleados::class, 'empresa_id');
    }
}
