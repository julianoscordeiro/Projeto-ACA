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

                //Pega o id da turma
                $idClass = $class->id;
        
                //Pega os checkbox de alunos
                $student= $request->input('student_selected');
        
                
                //Loop para adicionar aluno a tumra
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

        $share->save();

        return redirect()->route('turmas');
    }
}
