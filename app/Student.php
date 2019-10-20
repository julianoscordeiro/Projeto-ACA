<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //Indica o nome da tabela no banco de dados
    protected $table = 'student';

    protected $fillable = [
        'id',
        'nome',
        'email',
        'user_id'
    ];

    /*Relaciona o usuario a turma */
    public function user(){
        return $this->hasOne(User::class, 'id');
    }
    //Pertence a varias turmas

      public function classes()
      {
          return $this->belongsToMany('App\Classes')->using('App\ClassesStudent')->withTimestamp();
      } 


}
