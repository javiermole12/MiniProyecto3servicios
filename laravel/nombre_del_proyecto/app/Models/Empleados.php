<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'empleados';

    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'empresa_id');
    }
}
