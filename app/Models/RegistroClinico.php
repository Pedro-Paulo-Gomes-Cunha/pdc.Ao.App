<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroClinico extends Model
{
    use HasFactory;

    protected $table = 'registro_clinicos';
    protected $fillable = [
        'grupo_sanguino',
        'alergia',
        'hisorico_saude',
        'boletim_vacina',
        'utente_id'
    ];
}
