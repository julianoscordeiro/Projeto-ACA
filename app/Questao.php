<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $fillable = [
        'id',
        'assunto',
        'enunciado',
        'alternativaA',
        'alternativaB',
        'alternativaC',
        'alternativaD',
        'alternativaE',
        'resposta',
        'imagem',
        'tipoQuestao',
        'user_id'
    ];
}
