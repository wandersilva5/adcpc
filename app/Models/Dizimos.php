<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dizimos extends Model
{

    protected $fillable = [
        'descricao', 'valor', 'user_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
