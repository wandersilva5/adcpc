<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Historics;

class Ofertas extends Model
{

    protected $fillable = [
        'descricao', 'valor', 'user_id'
    ];

    public $tipoOferta = [
        'OFERTAS DA ESCOLA BIBLICA DOMINICAL',
        'OFERTAS DO CULTO DE DOMINGO',
        'OFERTAS DO CULTO DE TERÇA',
        'OFERTA ALÇADA',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function historics()
    {
        return $this->hasMany(Historics::class, 'id_tipo');
    }

}
