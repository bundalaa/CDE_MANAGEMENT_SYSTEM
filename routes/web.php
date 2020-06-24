<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('/index', 'AdminController' , ['except' => ['show' , 'create' ,'store' , 'edit' , 'destroy' , 'update']]);
});


Route::prefix('student')->name('student.')->group(function(){
    Route::resource('/index', 'StudentController' , ['except' => ['show' , 'create' ,'store' , 'edit' , 'destroy' , 'update']]);
});





