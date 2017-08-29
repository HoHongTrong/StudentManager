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
use function Sodium\compare;

class CoursesController extends Controller
{
    public function __construct() {
      $this->middleware('web');
    }

    public function getManageCourses(){
      $program = Program::all();
      $academic = Academic::orderBy('academic','DESC')->get();
      $shift = Shift::all();
      $time = Time::all();
      $batch = Batch::all();
      $group = Group::all();
      return view('courses.manageCourses',[
        'program'=>$program,
        'academic'=>$academic,
        'shift'=>$shift,
        'time'=>$time,
        'batch'=>$batch,
        'group'=>$group
      ]);
    }

    public function postInsertAcademic(Request $request) {
      if ($request->ajax()) {

        return response(Academic::create($request->all()));
      }
    }

    public function postInsertProgram(Request $request) {
      if ($request->ajax()) {
        return response(Program::create($request->all()));
      }
    }
//===========================================================================
    public function postInsertLevel(Request $request) {
      if ($request->ajax()) {
       return response(Level::create($request->all()));
     }
    }

    public function showLevel(Request $request) {
      if ($request->ajax()) {
        return response(Level::where('program_id',$request->program_id)->get());
      }
    }
  //==============================================================================
  public function createShift(Request $request){
      if ($request->ajax()) {
        return response(Shift::create($request->all()));
      }
  }

  public function createTime(Request $request) {
    if ($request->ajax()) {
      return response(Time::create($request->all()));
    }
  }

  public function createBatch(Request $request){
    if ($request->ajax()){
      return response(Batch::create($request->all()));
    }
  }

  public function createGroup(Request $request){
    if ($request->ajax()){
      return response(Group::create($request->all()));
    }
  }
//===============================================================
  public function createClass(Request $request){
    if ($request->ajax()){
      return response(MyClass::create($request->all()));
    }
  }
//===============================================================
  public function showClassInfomation(Request $request)
  {
    $classes = $this->ClassInformation()->get();
    return view('class.classInfo',['classes'=>$classes]);
  }
//===============================================================
  public function ClassInformation(){
    return MyClass::join('academics', 'academics.academic_id', '=', 'classes.academic_id')
      ->join('levels','levels.level_id','=','classes.level_id')
      ->join('programs','programs.program_id','=','levels.program_id')
      ->join('shifts','shifts.shift_id','=','classes.shift_id')
      ->join('times','times.time_id','=','classes.time_id')
      ->join('groups','groups.group_id','=','classes.group_id')
      ->join('batches','batches.batch_id','=','classes.batch_id')
      ->orderBy('classes.class_id','DESC');
  }

  public function deleteClass(Request $request){
    if ($request->ajax()){
      MyClass::destroy($request->class_id);
    }
  }

  public function editClass(Request $request){
    if ($request->ajax()){
      return response(MyClass::find($request->class_id));
    }
  }

  public function updateClassInfo(Request $request){

    return response(MyClass::updateOrCreate(['class_id'=>$request->class_id],$request->all()));
  }

}
