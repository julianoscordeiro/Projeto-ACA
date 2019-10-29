<?php

namespace App\Http\Controllers;

use Auth;

use App\Test;

use Illuminate\Http\Request;

use DB;

use App\TestWeight;

use App\TestQuestion;

use App\Grade;

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

    //adicionar peso as provas
    public function corrigirTest(Request $request){
        $id = $request->route('id');
        $questionId = DB::table('test_question')->where('test_id', '=', "$id")->first();
        $question_id = DB::table('test_question')->where('test_id', '=', "$id")->get();

        $count = 0;
        $pesos = $request->input('peso_selected');
       
    
        foreach ($question_id as $p) {
            
            $correcao = TestWeight::create([            
                'test_id' => $id,
                'question_id'=> $p->question_id,
                'peso'=> $pesos[$count],
                'user_id' => Auth::id()

                ]);

                $count++;
                
                
    
            }
        

        

        return redirect()->route('corrigirProva', $id);
    }


    public function corrigirProva(Request $request){
        $id = $request->route('id');

        
        $questionId = DB::table('test_question')->join('questions', 'questions.id', '=', 'test_question.question_id')->where('test_id', '=', "$id")->get();
        $testQuestion = DB::table('test_question')->where('test_id', '=', "$id")->first();
        $soma = 0;
        $count = 0;
        $contagem = 0;

        
        $alter = $request->input('alternativa_selected');

        foreach ($questionId as $q) {
            
            $contagem++;
            $pesoTab = DB::table('test_weight')->where('question_id', '=', "$q->question_id")->first();
            $valorPeso = $pesoTab->peso;
            if($q->resposta == $alter[$count]){
                $soma = $soma + $valorPeso;
            }

            
            $count++;
           
            
        }

        $soma;

        $nota = Grade::create([      
            'aluno_id'=> $request->aluno,
            'nota'=> $soma,
            'user_id' => Auth::id()
    
            ]);

        $nota->test_id = $id;
        
        $nota->save();

        


        return redirect()->route('corrigirProva',$id);
    }


    




}