<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_exame',
        'data_marcacao',
        'data_realizacao',
        'anexo',
        'status',
        'medico_id',
        'utente_id'
    ];
}
