<?php

namespace App\Http\Controllers;

use Auth;

use App\Questao;

use Illuminate\Http\Request;

class QuestionController  extends Controller
{
    /* Inserção no banco de dados */
    public function create(Request $request)
    {
        dd("Veio ate aqui caraio");
        Questao::create([            
        'assunto' => $request->assunto,
        'enunciado'=> $request->enunciado,
        'alternativaA' => $request->alternativaA,
        'alternativaB' => $request->alternativaB,
        'alternativaC' => $request->alternativaC,
        'alternativaD' => $request->alternativaD,
        'alternativaE' => $request->alternativaE,
        'resposta' => $request->resposta,
        'user_id' => Auth::id()
        ]);

        return redirect()->route('questoes');

        
    }





}