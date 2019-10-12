<?php
   
namespace App\Imports;
   
use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
   
class ImportUsers implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'name'     => $row[0],
            'email'    => $row[1], 
        ]);
    }
}
