<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historics extends Model
{
    protected $fillable = [
        'user_id', 'origem', 'tipo_movimentacao', 'data'
    ];

    public function dizimos()
    {
        return $this->hasOne(Dizimos::class);
    }

    public function ofertas()
    {
        return $this->hasOne(Ofertas::class);
    }
}
