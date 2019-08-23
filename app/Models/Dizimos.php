<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Historics;

class Dizimos extends Model
{

    protected $fillable = [
        'descricao', 'valor', 'user_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function historics()
    {
        return $this->belongsTo(Historics::class, 'id_tipo');
    }

}
