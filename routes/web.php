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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);

Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/', 'Attorney\AttorneyController@dashboard');

/* Attorney Routes */
Route::group(['prefix'=>'attorney', 'namespace' => 'Attorney', 'middleware' => 'guest'], function(){
    Route::get('/', ['as' => 'dashboard', 'uses' => 'AttorneyController@dashboard']);
	Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'AttorneyController@dashboard']);
});


/* Employer Routes */
Route::group(['prefix' => 'employer', 'namespace' => 'Employer', 'middleware' => 'guest'], function(){
	//print_r(\Auth::user()); die;
	Route::get('/', ['as' => 'dashboard', 'uses' => 'EmployerController@dashboard']);
	Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'EmployerController@dashboard']);
});

/* Employee Routes */
Route::group(['prefix'=>'emp', 'namespace' => 'Employee', 'middleware' => 'guest'], function(){
    Route::get('/', ['as' => 'dashboard', 'uses' => 'EmployeeController@dashboard']);
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'EmployeeController@dashboard']);
});

//Route::view('/employer/dashboard', 'employer.dashboard');
//Route::view('/employee/dashboard', 'employee.dashboard');
//Route::view('/attorney/dashboard', 'attorney.dashboard');
