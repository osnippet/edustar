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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group(['middleware' => ['auth']],function(){
	Route::resource('users','UserController');
	Route::resource('roles','RoleController');
	Route::resource('classes','SclassController');	
	Route::resource('students','StudentController');
	Route::resource('subjects','SubjectController');
});