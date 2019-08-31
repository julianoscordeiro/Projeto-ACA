<?php

namespace App\Http\Controllers;

use Auth;

use App\Question;

use Illuminate\Http\Request;

class QuestionController  extends Controller
{


    /* Inserção no banco de dados */
    public function create(Request $request)
    {
        
        $question = Question::create([            
        'assunto' => $request->assunto,
        'enunciado'=> $request->enunciado,
        'alternativaA' => $request->alternativaA,
        'alternativaB' => $request->alternativaB,
        'alternativaC' => $request->alternativaC,
        'alternativaD' => $request->alternativaD,
        'alternativaE' => $request->alternativaE,
        'resposta' => $request->resposta,
        'tipoQuestao' => true,
        'user_id' => Auth::id()
        ]);

        

        
        //Veirica se tem uma imagem
        $temimagem = $request->imagem;

        if($temimagem != null){
            //Salva na pasta storage/app/images/questions
            $path = $request->imagem->storeAs('/questions', $question->id.".".$request->imagem->extension());
            //Salva o caminho da imagem no banco de dados
            $question->imagem = $path;
            $question->save();
        }
        
        
        
        return redirect()->route('questoes');

    }





}