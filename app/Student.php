<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
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

}
