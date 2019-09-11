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
        'user_id' => Auth::id()

        ]);
        
        return redirect()->route('provas');

    }





}