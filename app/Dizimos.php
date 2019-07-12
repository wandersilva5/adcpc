<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dizimos extends Model
{

    protected $fillable = [
        'descricao', 'valor',
    ];

    public $tipoOferta = [
        'Ofertas da Escola Biblica Dominical',
        'Ofertas do Culto de Domingo',
        'Ofertas do Culto de Terça',
        'Ofertass Alçada',
    ];
}
