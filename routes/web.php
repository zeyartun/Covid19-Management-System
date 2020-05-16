<?php

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

Route::get('/township','TownshipController@townToCity');

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/home', 'HomeController@index');
Route::get('/patient', function(){
    return view('admin.patients');
});
Route::get('/doctor', function(){
    return view('admin.doctors');
});
Route::get('/QCenter', function(){
    return view('admin.QCenter');
});
Route::get('/instock', function(){
    return view('admin.instock');
});
