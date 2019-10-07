<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ClassesStudent extends Pivot
{
    /* Array com atributos de TurmaAluno */
    protected $fillable = [
        'id',
        'classes_id',
        'student_id',
        'user_id',
    ];

    /*Retorna todas os estudantes*/
    public function questoes(){
        return $this->hasMany(Aluno::class, 'studentId');
    }

}