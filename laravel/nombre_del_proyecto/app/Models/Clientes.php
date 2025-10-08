<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'empresa_id');
    }
}
