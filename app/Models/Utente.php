<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    use HasFactory;

    protected $table = 'Utentes';

    protected $fillable = [
        'nome',
        'data_nascimento',
        'bi',
        'telefone',
        'genero',
        'seguro',
        'numero_seguro',
        'provincia',
        'municipio',
        'referencia'
       
    ];
}
