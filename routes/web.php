<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('noPermission',['as'=>'noPermission'],function (){
  return view('noPermission');
});

Route::group(['middleware'=>['authen']],function (){
  Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@dashboard']);
  Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
});

Route::group(['middleware'=>['authen','roles'],'roles'=>['admin']],function (){
  Route::get('/manage/courses',['as'=>'manageCourses','uses'=>'CoursesController@getManageCourses']);

  Route::post('manage/courses/insert',['as'=>'postInsertAcademic','uses'=>'CoursesController@postInsertAcademic']);
  Route::post('manage/courses/insert-program',['as'=>'postInsertProgram', 'uses'=>'CoursesController@postInsertProgram']);
  Route::post('manage/courese/insert-level',['as'=>'postInsertLevel','uses'=>'CoursesController@postInsertLevel']);

  Route::get('manage/courses/showLevel',['as'=>'showLevel','uses'=>'CoursesController@showLevel']);

  Route::post('manage/courese/shift',['as'=>'createShift','uses'=>'CoursesController@createShift']);
  Route::post('manage/courese/time',['as'=>'createTime','uses'=>'CoursesController@createTime']);
  Route::post('manage/courese/batch',['as'=>'createBatch','uses'=>'CoursesController@createBatch']);
  Route::post('manage/courese/group',['as'=>'createGroup','uses'=>'CoursesController@createGroup']);
  Route::post('manage/courese/class',['as'=>'createClass','uses'=>'CoursesController@createClass']);

  Route::get('manage/courese/classinfo',['as'=>'showClassInfomation','uses'=>'CoursesController@showClassInfomation']);
  Route::post('manage/courese/class/delete',['as'=>'deleteClass','uses'=>'CoursesController@deleteClass']);
  Route::get('manage/courese/class/edit',['as'=>'editClass','uses'=>'CoursesController@editClass']);
  Route::post('manage/courese/class/update',['as'=>'updateClassInfo','uses'=>'CoursesController@updateClassInfo']);

  //==========================Student Register===================
  Route::get('student/getregister',['as'=>'getStudentRegister','uses'=>'StudentController@getStudentRegister']);

});

