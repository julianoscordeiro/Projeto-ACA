<?php
   
namespace App;
   
use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Auth;
   
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
            'user_id' => Auth::id(),
        ]);
    }
}
