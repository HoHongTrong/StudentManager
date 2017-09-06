<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
use App\Shift;
use App\Time;
use App\Batch;
use App\Group;
use App\MyClass;
class StudentController extends Controller
{

    public function getStudentRegister(){
      $program = Program::all();
      $shift = Shift::all();
      $time = Time::all();
      $batch = Batch::all();
      $group = Group::all();
      $academic = Academic::orderBy('academic', 'DESC')->get();
      return view('student.studentRegister',[
        'program' => $program,
        'academic' => $academic,
        'shift' => $shift,
        'time' => $time,
        'batch' => $batch,
        'group' => $group
      ]);
    }

    public function postStudentRegister(Request $request){

     dump($request->all());
    }
}
