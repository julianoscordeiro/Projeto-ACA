<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'instituicao',
        'curso',
        'periodo',
        'semestre',
        'alunos',
        'user_id'
    ];


    /*Relaciona o usuario a turma */
    public function user(){
        return $this->hasOne(User::class, 'id');
    }


}
