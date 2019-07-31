<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ofertas extends Model
{

    protected $fillable = [
        'descricao', 'valor', 'tipo_oferta_id'
    ];

    public $tipoOferta = [
        'Ofertas da Escola Biblica Dominical',
        'Ofertas do Culto de Domingo',
        'Ofertas do Culto de Terça',
        'Ofertass Alçada',
    ];
}
