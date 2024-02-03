<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'nascimento',
        'bi',
        'genero',
        'especialidade',
        'contato_id',
        'endereco_id',
       
    ];

    public function contato(){
        /**
         * Get the contato that owns the Medico
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        return $this->belongsTo(Contato::class, 'contato_id', 'id');
       
    }

    public function mcontato()
    {
        return $this->hasOne(Contato::class, 'contato_id', 'id');
    }


    public function telefone(){
        return $this->hasMany(Medico::class, 'id');
    }
}
