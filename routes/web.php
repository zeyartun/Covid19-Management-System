<?php

use App\Http\Controllers\PatientController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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
    return view('Website.welcome');
});

Route::resource('/patients','WebPatientController');
Route::resource('/doctors','WebDoctorController');
Route::resource('/qcenters','WebQCenterController');


Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/home', 'HomeController@index');

Route::Group(['prefix'=>'admin', 'middleware' => 'auth'],function(){
    Route::resource('/patients','PatientController');

    Route::resource('/doctors','DoctorController');

    Route::resource('/qcenters','QCenterController');

    Route::resource('/city&township','TownshipController');
});