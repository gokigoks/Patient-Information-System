<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pis',function(){
	return view('pages.index');
});

Route::get('/pis/home',function(){
	return view('pages.homepage');
});





/*patient*/
Route::get('/pis/patientform','PatientController@create');
Route::post('pis/addpatient','PatientController@store');
Route::get('/pis/patient','PatientController@index');
Route::get('/pis/patient/{id}','PatientController@show');
Route::get('/patient/{id}/record/{record}','PatientController@record');

/*Doctor*/
Route::get('/pis/doctorform','DoctorController@create');
Route::post('/pis/adddoctor','DoctorController@store');
Route::get('/pis/doctor','DoctorController@index');
// Route::get('/pis/doctor/{id}','DoctorController@show');

//bed
Route::resource('beds','BedsController');
//

//patient records

//
//visit
Route::get('visit/create','VisitController@create');
Route::post('visit/create','VisitController@store');
Route::get('visit','VisitController@index');
Route::get('visit/{id}','VisitController@show');
Route::delete('visit/{id}','VisitController@discharge');
//

//User controllers
Route::get('user/home','UserController@index');
//


/*Nurse Controller */
Route::get('nurse/home','AdminController@home'); // admin home

//Doctor landing page
Route::get('doctor/home','DoctorController@home'); // admin home

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
// password route

Route::controllers([
   'password' => 'Auth\PasswordController',
]);

//ajax request
Route::get('/getdoctors',function(){
	$doc_id = Input::get('doc_id');

    $doctors = App\Doctor::where('field','=',$doc_id)->get();

    return Response::json($doctors);
});

//dummy routes
Route::get('dummy','PisController@test');