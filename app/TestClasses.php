<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TestClasses extends Pivot
{
    /* Array com atributos de TurmaAluno */
    protected $fillable = [
        'id',
        'classes_id',
        'test_id',
        'user_id',
    ];

    /*Retorna todas os provas*/
    public function provas(){
        return $this->hasMany(Test::class, 'testId');
    }

}