<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
class CoursesController extends Controller
{
    public function __construct() {
      $this->middleware('web');
    }

    public function getManageCourses(){
      $program = Program::all();
      $academic = Academic::orderBy('academic','DESC')->get();
      $level = Level::all();
      return view('courses.manageCourses',[
        'program'=>$program,
        'academic'=>$academic,
        'level'=>$level
      ]);
    }

    public function postInsertAcademic(Request $request)
    {
      if ($request->ajax())
      {

        return response(Academic::create($request->all()));
      }
    }

    public function postInsertProgram(Request $request)
    {
      if ($request->ajax())
      {

        return response(Program::create($request->all()));
      }
    }

    public function postInsertLevel(Request $request)
    {
     if ($request->ajax())
     {
       return response(Level::create($request->all()));
     }
    }

    public function showLevel(Request $request)
    {
      if ($request->ajax())
      {
        return response(Level::find($request->program_id));
      }
    }
}
