<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Pivot
{
    protected $fillable = [
        'id',
        'testId',
        'questionId'
    ];

    /*Retorna todas as questões*/
    public function questoes(){
        return $this->hasMany(Questao::class, 'questionId');
    }

}
