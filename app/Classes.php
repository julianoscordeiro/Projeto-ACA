<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //Indica o nome da tabela no banco de dados
    protected $table = 'class';

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
    //pertence a varios alunos
    public function students()
    {
      return $this->belongsToMany('App\Student')->using('App\ClassesStudent')->withTimestamp();
    }

}
