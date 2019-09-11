<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Auth;
use DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $title = 'Inicio | ';
        return view('home.index', [
            'title' => $title
        ]);
    }


    /**
     * Show the user dashboard.
     */

    public function home()
    {   
        $title = 'Painel | ';
        return view('home.home', [
            'title' => $title
        ]);
    }

    public function questoes()
    {   
        //Retorna a lista de questões;
        $userid = Auth::id();
        $question = DB::table('questions')->where('user_id', '=', "$userid")->get();

        $title = 'Questões | ';
        return view('home.questions', [
            'title' => $title
        ], compact('question'));
    }
    public function criarquestao()
    {   
        $title = 'Criar Questão | ';
        return view('home.createquestion', [
            'title' => $title
        ]);
    }
    public function provas()
    {   
        //Retorna a lista de questões;
        $userid = Auth::id();
        $test = DB::table('tests')->where('user_id', '=', "$userid")->get();

        $title = 'Provas | ';
        return view('home.tests', [
            'title' => $title
        ], compact('test'));
    }
    public function criarProva()
    {   
        //Retorna a lista de questões;
        $userid = Auth::id();
        $question = DB::table('questions')->where('user_id', '=', "$userid")->get();

        $title = 'Criar Prova | ';
        return view('home.createtest', [
            'title' => $title
        ], compact('question'));
    }
}
