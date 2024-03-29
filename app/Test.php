<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /* Array com atributos de prova */
    protected $fillable = [
        'id',
        'nome',
        'unidadeCurricular',
        'assunto',
        'user_id'
    ];

    //pertence a varias questões
    public function questions()
    {
        return $this->belongsToMany('App\Question')->using('App\TestQuestion')->withTimestamp();
    }




}
