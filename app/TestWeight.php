<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestWeight extends Model
{
    protected $table = 'test_weight';

    /* Array com atributos de TestWeight */
    protected $fillable = [
        'id',
        'test_id',
        'question_id',
        'peso',
        'user_id',
    ];

    /*Retorna todas as questões*/
    public function questoes(){
        return $this->hasMany(Questao::class, 'question_id');
    }
}
