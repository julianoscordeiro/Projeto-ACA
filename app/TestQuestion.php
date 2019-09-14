<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TestQuestion extends Pivot
{
    protected $fillable = [
        'id',
        'test_id',
        'question_id',
        'user_id',
    ];

    /*Retorna todas as questões*/
    public function questoes(){
        return $this->hasMany(Questao::class, 'questionId');
    }

}
