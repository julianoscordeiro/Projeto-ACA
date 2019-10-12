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

    //Questões
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

    //Turmas
    public function turmas()
    {
        //Retorna a lista de questões;
        $userid = Auth::id();
        $class = DB::table('class')->where('user_id', '=', "$userid")->get();
        $title = 'Turmas | ';
        return view('home.classes', [
            'title' => $title
        ],compact('class'));
    }

    //Criar Turma
    public function criarturma()
    {
        //Retorna a lista de turma;
        $userid = Auth::id();
        $class = DB::table('class')->where('user_id', '=', "$userid")->get();
        $student = DB::table('student')->where('user_id', '=', "$userid")->get();
        $title = 'Criar Turma | ';
        return view('home.createclass', [
            'title' => $title
        ],compact('class','student'));
    }
    //Editar turma
    public function editarTurma(Request $request)
    {
        $id = $request->route('id');
        //Retorna a lista de turma;
        $class = DB::table('class')->where('id', '=', "$id")->get();

        $title = 'Editar Turma | ';
        return view('home.updateClass', [
            'title' => $title
        ], compact('id', 'class'));
    }

    public function provasTurmas(Request $request)
    {
        $id = $request->route('id');
        $userid = Auth::id();
        $classTests = DB::table('test_class')->join('class', 'class.id', '=', 'test_class.classes_id')->join('tests', 'tests.id', '=', 'test_class.test_id')->where('classes_id', '=', "$id")->get();

        

        $title = 'Provas da turma | ';
        return view('home.classestests', [
            'title' => $title
        ],compact('id','classTests'));
    }
    public function addProvaTurma(Request $request)
    {
        $id = $request->route('id');
        //Retorna a lista de turma;
        //$test = DB::table('test')->where('id', '=', "$id")->get();
        $userid = Auth::id();
        $test = DB::table('tests')->where('user_id', '=', "$userid")->get();

        

        $title = 'Adicionar prova | ';
        return view('home.addtestclass', [
            'title' => $title
        ],compact('test','id'));
    }

    //Alunos
    
    public function alunos()
    {
        //Retorna a lista de alunos;
        $userid = Auth::id();
        $student = DB::table('student')->where('user_id', '=', "$userid")->get();
        $title = 'Alunos | ';
        return view('home.student', [
            'title' => $title
        ],compact('student'));
    }

        //Criar Aluno
        public function criaraluno()
        {
            //Retorna a lista de alunos;
            $userid = Auth::id();
            $student = DB::table('student')->where('user_id', '=', "$userid")->get();
            $title = 'Criar Aluno | ';
            return view('home.createstudent', [
                'title' => $title
            ],compact('student'));
        }
        //Editar turma
        public function editarAluno(Request $request)
        {
            $id = $request->route('id');
            //Retorna a lista de alunos;
            $class = DB::table('student')->where('id', '=', "$id")->get();
    
            $title = 'Editar Aluno | ';
            return view('home.updateStudent', [
                'title' => $title
            ], compact('id', 'student'));
        }
}
