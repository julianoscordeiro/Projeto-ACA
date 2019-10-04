<?php

namespace App\Http\Controllers;

use Auth;

use App\Classes;

use Illuminate\Http\Request;

use DB;


class ClassesController extends Controller
{
    /* Inserção no banco de dados */
    public function create(Request $request)
    {

        $class = Classes::create([
            'nome' => $request->nome,
            'instituicao' => $request->instituicao,
            'curso' => $request->curso,
            'periodo' => $request->periodo,
            'semestre' => $request->semestre,
            'alunos' => $request->alunos,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('turmas');
    }
}
