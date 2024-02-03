<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoClinico extends Model
{
    use HasFactory;

    protected $fillable = [

        'exame_efetuado',
        'resultado',
        'diagnostico',
        'prcedimento',
        'terapeutica',
        'medico',
        'utente_id'
    ];
}
