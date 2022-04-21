<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Student1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function morphOne($id)
    {
        $stu = Student::find($id);
        dd($stu->profile->profileable_type::all());
    }


    public function getStudentName()
    {
        echo "student";
        $stu= Student1::find(1);
        dd($stu->courses->toArray());
        $stu->courses()->attach([1,2]); 
    }
}
