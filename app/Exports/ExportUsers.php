<?php
   
namespace App;
   
use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Database\Eloquent\Model;
   
class ExportUsers implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }
}