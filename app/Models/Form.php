<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'formulario';

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'mensaje'
    ];
}
