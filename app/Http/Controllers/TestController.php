<?php

namespace App\Http\Controllers;

use Auth;

use App\Test;

use Illuminate\Http\Request;

use DB;

class TestController  extends Controller
{


    /* Inserção no banco de dados */
    public function create(Request $request)
    {
        
        $test = Test::create([            
        'nome' => $request->nome,
        'unidadeCurricular'=> $request->unidadeCurricular,
        'assunto'=> $request->assunto,

        ]);
        
        return redirect()->route('provas');

    }

    public function deleteQuestion($id){
        
        //Deleta questão
        $deleteQuestion = DB::table('questions')->where('id', '=', "$id")->delete();
        return redirect()->route('questoes');
    }





}