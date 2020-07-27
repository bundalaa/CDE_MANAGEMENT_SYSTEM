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




Route::get('AboutUS', function () {
    return view('AboutUS');
});


Route::get('/', function () {
    return view('homePg');
});


// Route::get('/', function () {
//     return view('top-nav');
// });

// Route::get('upload', function () {
//     return view('file-upload');
// });

Route::get('publication', function () {
    return view('publication');
});
Route::get('feedback', function () {
    return view('feedback');
}); 



Route::get('contact-us', 'ContactUSController@contactUS');

Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);




Route::get('chart-js', 'ChartController@index');




// Create file upload form
Route::get('/upload-file', 'FileUpload@createForm');

// Store file
Route::post('/upload-file', 'FileUpload@fileUpload')->name('fileUpload');



Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');






Route::get('file', 'MultipleFileController@index');

Route::post('save', 'MultipleFileController@save')->name('file.save');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');




// Route::prefix('admin')->name('admin.')->group(function(){
//     Route::resource('/index', 'AdminController' , ['except' => ['show' , 'create' ,'store' , 'edit' , 'destroy' , 'update']]);
// });


// Route::prefix('student')->name('student.')->group(function(){
//     Route::resource('/index', 'StudentController' , ['except' => ['show' , 'create' ,'store' , 'edit' , 'destroy' , 'update']]);
// });






// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');






// return view('publication');









// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
