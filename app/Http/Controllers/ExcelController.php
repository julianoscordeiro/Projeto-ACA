<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use DB;
use App\Http\Imports\ImportUsers;

class ExcelController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExport()
    {
       return view('home.import');
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ExportUsers, 'alunos.xlsx');
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ImportUsers, request()->file('file'));
            
        return redirect('/')->/*route('turmas')*/with('success', 'all good');
    }
}
