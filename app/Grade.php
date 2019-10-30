<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grade';

    /* Array com atributos de TestWeight */
    protected $fillable = [
        'id',
        'aluno_id',
        'teste_id',
        'nota',
        'user_id',
    ];
}
