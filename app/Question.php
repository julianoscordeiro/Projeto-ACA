<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /* Array com atributos de questão */
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
    

    /*Relaciona o usuario a questão */
    public function user(){
        return $this->hasOne(User::class, 'id');
    }

    //Pertence a varias provas
    public function tests()
    {
        return $this->belongsToMany('App\Test')->using('App\TestQuestion')->withTimestamp();
    }
    

}
