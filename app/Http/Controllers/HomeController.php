<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Student;

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
        $question = DB::table('questions')->where('user_id', '=', "$userid")->paginate(5);


        $title = 'Questões | ';
        return view('home.questions', [
            'title' => $title
        ], compact('question','question'));
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
        //$id = $request->route('id');
        $userid = Auth::id();
        $test = DB::table('tests')->where('user_id', '=', "$userid")->paginate(10);
        $questionTests = DB::table('test_question')->join('questions', 'questions.id', '=', 'test_question.question_id')->join('tests', 'tests.id', '=', 'test_question.test_id')->get();
        $title = 'Provas | ';

        return view('home.tests', [
            'title' => $title
        ], compact('test','questionTests'));
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
        $classesStudent = DB::table('classes_student')->join('class', 'class.id', '=', 'classes_student.classes_id')->join('student', 'student.id', '=', 'classes_student.student_id')->get();
        $title = 'Turmas | ';
        return view('home.classes', [
            'title' => $title
        ],compact('class', 'classesStudent'));
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
        $userid = Auth::id();
        $student = DB::table('student')->where('user_id', '=', "$userid")->get();

        $title = 'Editar Turma | ';
        return view('home.updateClass', [
            'title' => $title
        ], compact('id', 'class','student'));
    }

    public function provasTurmas(Request $request)
    {
        $id = $request->route('id');
        $userid = Auth::id();
        $classTests = DB::table('test_class')->join('class', 'class.id', '=', 'test_class.classes_id')->join('tests', 'tests.id', '=', 'test_class.test_id')->where('classes_id', '=', "$id")->get();
        $classTest = DB::table('test_class')->where('classes_id', '=', "$id")->get();
        

        $title = 'Provas da turma | ';
        return view('home.classestests', [
            'title' => $title
        ],compact('id','classTests','classTest'));
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

        //Exportar aluno
        public function exportarAluno()
        {
            $userid = Auth::id();
            $student = DB::table('student')->where('user_id', '=', "$userid")->get();
            return (new FastExcel($student))->download('alunos.xlsx');
            
        }

          //Importar aluno

          public function importarAluno(Request $request)       
        {  
          if($request->file('file') == null){
            return redirect()->route('alunos');
          } else{
            $student = (new FastExcel)->import($request->file('file'), function ($line) {
                return Student::create([
                    'nome' => $line['Nome'],
                    'email' => $line['Email'],
                    'user_id' => Auth::id()
                ]);
            });
            return redirect()->route('alunos');
        }
        }

        //Editar aluno
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

          //Correções
    public function correcao()
    {
        //Retorna a lista de questões;
        //$id = $request->route('id');
        $userid = Auth::id();
        $class = DB::table('class')->where('user_id', '=', "$userid")->get();
        
        //Lista de provas de todas as turmas do usuario
        $testList = DB::table('test_class')->join('class', 'class.id', '=', 'test_class.classes_id')->join('tests', 'tests.id', '=', 'test_class.test_id')->get();
        $title = 'Correção | ';
        return view('home.correction', [
            'title' => $title
        ],compact('class','testList'));
    }

    //Corrigir prova
    public function corrigir(Request $request)
    {
        $id = $request->route('id');
        //Retorna a lista de questões;
        $userid = Auth::id();

        //Retornar as questões da prova
        $testQuestion = DB::table('test_question')->join('questions', 'questions.id', '=', 'test_question.question_id')->where('test_id', '=', "$id")->get();
        
        //Lista de provas de todas as turmas do usuario
        $testList = DB::table('test_class')->join('class', 'class.id', '=', 'test_class.classes_id')->join('tests', 'tests.id', '=', 'test_class.test_id')->get();
        $title = 'Corrigir | ';
        return view('home.correctiontest', [
            'title' => $title
        ],compact('testQuestion'));


    }

    public function corrigirProva(Request $request)
    {
        $id = $request->route('id');
        //Retorna a lista de questões;
        $userid = Auth::id();

        //Retornar as questões da prova
        $testQuestion = DB::table('test_question')->join('questions', 'questions.id', '=', 'test_question.question_id')->where('test_id', '=', "$id")->get();
        $student = DB::table('student')->get();
        $nota = DB::table('student')->get();
        
        
        $title = 'Corrigir | ';
        return view('home.correctiotestnew', [
            'title' => $title
        ],compact('testQuestion','student'));


    }

    //Relatorios
    public function relatorios()
    {
        
        $userid = Auth::id();
        $class = DB::table('class')->where('user_id', '=', "$userid")->get();
        
        //Lista de provas de todas as turmas do usuario
        $testList = DB::table('test_class')->join('class', 'class.id', '=', 'test_class.classes_id')->join('tests', 'tests.id', '=', 'test_class.test_id')->get();
        $title = 'Relatórios | ';
        return view('home.reports', [
            'title' => $title
        ],compact('class','testList'));
    }

    //Relatorio de notas
    public function relatorioDeNotas(Request $request)
    {
        $id = $request->route('id');
        $userid = Auth::id();
        
        //Seleciona o aluno e a prova
        $grades = DB::table('grade')
        ->join('student', 'student.id', '=', 'grade.aluno_id')
        ->join('tests', 'tests.id', '=', 'grade.test_id')
        ->selectRaw('tests.nome as nomeProva, student.nome as nomeAluno, student.email as email, grade.nota as nota')
        ->where('test_id', '=', "$id")
        ->get();

        $title = 'Relatório de Notas | ';
        return view('home.reportsgrades', [
            'title' => $title
        ],compact('grades'));
    }
}
