<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;

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
        $pag = Question::where('user_id','=', Auth::id())->orderBy('id')->paginate(5);


        $title = 'Questões | ';
        return view('home.questions', [
            'title' => $title
        ], compact('question','pag'));
    }
    public function criarquestao()
    {
        $title = 'Criar Questão | ';
        return view('home.createquestion', [
            'title' => $title
        ]);
    }
    public function buscarquestao()
    {
        //Busca a questão
        $q = Input::get ( 'q' );
        $procura = Question::where('assunto','LIKE','%'.$q.'%')->orWhere('enunciado','LIKE','%'.$q.'%')->get();
        if(count($procura) > 0)
            return view('home.searchquestion')->withDetails($procura)->withQuery ( $q );
        else return redirect()->route('questoes');

        //Retorna a lista de questões;
        $userid = Auth::id();
        $banana = DB::table('questions')->where('user_id', '=', "$userid")->get();

        $title = 'Resultado | ';
        return view('home.searchquestion', [
            'title' => $title
        ], compact('banana'));
    }

    public function editarquestao(Request $request)
    {

        $id = $request->route('id');


        //Retorna a lista de questões;
        $question = DB::table('questions')->where('id', '=', "$id")->get();

        $title = 'Editar Questão | ';
        return view('home.updatequestion', [
            'title' => $title
        ], compact('id', 'question'));
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
