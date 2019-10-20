<?php
// Our Controller 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
// This is important to add here. 
use PDF;
use DB;
  
class ImprimirController extends Controller
{
    public function imprimir(Request $request)
    {
    
       $id = $request->route('id');
       $classTests = DB::table('test_question')->join('questions', 'questions.id', '=', 'test_question.question_id')->where('test_id', '=', "$id")->get();
       $test = DB::table('tests')->where('id', '=', "$id")->get();
        
        $count = 1;


       $pdf = PDF::loadView('home.pdf_view',compact('classTests','count','test'));

        return $pdf->download('prova.pdf');
    }
}