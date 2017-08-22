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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);


Route::group(['middleware'=>['authen','roles']],function (){
  Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@dashboard']);
  Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
});