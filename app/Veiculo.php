<?php

namespace FederalSt;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'placa',
        'renavam',
        'modelo',
        'marca',
        'ano',
        'proprietario'
    ];
}
