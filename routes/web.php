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


Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/home', 'HomeController@index');

Route::Group(['prefix'=>'admin', 'middleware' => 'auth'],function(){
    Route::get('/patients','PatientController@index');

    Route::get('/doctors','DoctorController@index');

    Route::get('/qcenters','QCenterController@index');

    Route::get('/city&township','TownshipController@index');
});