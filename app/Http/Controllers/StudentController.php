<?php

namespace App\Http\Controllers;

use Auth;

use App\Student;

use Illuminate\Http\Request;

use DB;

class StudentController  extends Controller
{


    /* Inserção no banco de dados */
    public function create(Request $request)
    {

        $student = Student::create([
            'nome'=> $request->nome,
            'email'=> $request->email,
            'user_id' => Auth::id()
        ]);
     
        return redirect()->route('alunos');
    }

    /*public function edit($id)
    {
        $share = Share::find($id);

        return view('shares.edit', compact('share'));
    }*/

    //Deleta aluno
    public function deleteStudent($id)
    {
        $deleteStudent = DB::table('student')->where('id', '=', "$id")->delete();
        return redirect()->route('alunos');
    }

    public function updateStudent(Request $request, $id)
    {
        $share = Student::find($id);
        $share->nome = $request->get('nome') ?? $share->nome;
        $share->email = $request->get('email') ?? $share->email;

        $share->save();
        
        return redirect()->route('alunos');
    }

            
}
