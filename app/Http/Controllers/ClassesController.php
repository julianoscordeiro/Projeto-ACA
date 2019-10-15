<?php

namespace App\Http\Controllers;

use Auth;

use App\Classes;
use App\ClassesStudent;
use App\TestClasses;

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
            'alunos' => 0,
            'user_id' => Auth::id()
        ]);


        

                //Pega o id da turma
                $idClass = $class->id;
        
                //Pega os checkbox de alunos
                $student= $request->input('student_selected');
        
                
                //Loop para adicionar aluno a tumra
                if($student != null){
                    foreach ($student as $q) {
                        //Numero para indicar o indice da questão colocado no array
                        $numero = 0;
                        $classesStudent = ClassesStudent::create([            
                            'classes_id' => $idClass,
                            'student_id' => $q[$numero],
                            'user_id' => Auth::id(),
                            ]);      
                        $numero++;
                    }
            }

        $classStudentList =  DB::table('classes_student')->where('classes_id', '=', "$class->id")->count();

        $class->alunos = $classStudentList;

        $class->save();

        return redirect()->route('turmas');
    }
        
    //Deleta turma
    public function deleteClasses($id)
    {
        $deleteQuestion = DB::table('class')->where('id', '=', "$id")->delete();
        return redirect()->route('turmas');
    }

    public function updateClass(Request $request, $id)
    {
        $share = Classes::find($id);
        $share->nome = $request->get('nome') ?? $share->nome;
        $share->instituicao = $request->get('instituicao') ?? $share->instituicao;
        $share->curso = $request->get('curso') ?? $share->curso;
        $share->periodo = $request->get('periodo') ?? $share->periodo;
        $share->semestre = $request->get('semestre') ?? $share->semestre;

        $student= $request->input('student_selected');

        foreach ($student as $q) {
            //Numero para indicar o indice da questão colocado no array
            $numero = 0;
            $classesStudent = ClassesStudent::create([            
                'classes_id' => $share->id,
                'student_id' => $q[$numero],
                'user_id' => Auth::id(),
                ]);      
            $numero++;
        }

        $share->save();

        return redirect()->route('turmas');
    }

    public function adicionarProva(Request $request,$id){

        $numero = 0;
        $classesStudent = TestClasses::create([            
            'classes_id' => $id,
            'test_id' => $request->test_selected,
            'user_id' => Auth::id(),
            ]);

        return redirect()->route('turmas');
    }

    public function deleteClassTest($id)
    {
        $deleteClassTest = DB::table('test_class')->where('id', '=', "$id")->delete();
        return redirect()->route('turmas');
    }
}
