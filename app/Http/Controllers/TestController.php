<?php

namespace App\Http\Controllers;

use Auth;

use App\Test;

use Illuminate\Http\Request;

use DB;

use App\TestWeight;

use App\TestQuestion;

class TestController  extends Controller
{


    /* Inserção no banco de dados */
    public function create(Request $request)
    {
        
        $test = Test::create([            
        'nome' => $request->nome,
        'unidadeCurricular'=> $request->unidadeCurricular,
        'assunto'=> $request->assunto,
        'user_id' => Auth::id()

        ]);
        
        //Pega o id da prova
        $idTest = $test->id;
        
        //Pega os checkbox das questões
        $question = $request->input('question_selected');

        
        //Loop para adicionar questões a prova
        foreach ($question as $q) {
            //Numero para indicar o indice da questão colocado no array
            $numero = 0;
            $testQuestion = TestQuestion::create([            
                'test_id' => $idTest,
                'question_id' => $q[$numero],
                'user_id' => Auth::id(),
        
                ]);

            $numero++;
        }

        
        return redirect()->route('provas');

    }


    public function deleteTest($id){
        
        //Deleta prova
        $deleteTest = DB::table('tests')->where('id', '=', "$id")->delete();
        return redirect()->route('provas');
    }


    //busca
    public function search(Request $request){
        $search = $request->get('search');
        $userid = Auth::id(); 
        $test = DB::table('tests')->where('nome','like', '%'.$search.'%')->paginate(100);
        return view('home.tests',['tests' => $test],compact('test'));
    }

    public function corrigirTest(Request $request){
        $id = $request->route('id');
        $questionId = DB::table('test_question')->where('test_id', '=', "$id")->get();

        foreach ($questionId as $q) {
            
        


        $correcao = TestWeight::create([            
            'test_id' => $id,
            'question_id'=> $q->question_id,
            'peso'=> $request->peso,
            'user_id' => Auth::id()
    
            ]);

        }

        return redirect()->route('correcao');
    }




}