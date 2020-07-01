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

Route::view('progress','admin/progress');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('/index', 'AdminController' , ['except' => ['show' , 'create' ,'store' , 'edit' , 'destroy' , 'update']]);
});
Route::prefix('student')->name('student.')->group(function(){
    Route::resource('/index', 'StudentController' , ['except' => ['show' , 'create' ,'store' , 'edit' , 'destroy' , 'update']]);
});
Route::prefix('challengeOwner')->name('challengeOwner.')->group(function(){
    Route::resource('/index', 'ChallengeOwnerController' , ['except' => ['show' , 'create' ,'store' , 'edit' , 'destroy' , 'update']]);
});
Route::prefix('supervisor')->name('supervisor.')->group(function(){
    Route::resource('/index', 'SupervisorController' , ['except' => ['show' , 'create' ,'store' , 'edit' , 'destroy' , 'update']]);
});

// User Routes
Route::get('/','UserController@getLatestUsers');
Route::post('createnewuser','UserController@postUser');
Route::get('createuser','UserController@createUser');
// Route::get('viewedituser','UserController@viewEditUser');
Route::get('editUser/{id}','UserController@updateUser');
Route::get('profile','UserController@profile');
Route::post('update-avatar','UserController@updateAvatar');
Route::post('edituserprofile','UserController@updateUserProfile');
Route::get('user-screen','UserController@getUsers')->name('user-screen.create');
Route::delete('deleteUser/{id}','UserController@deleteUser');
Route::get('getchangepassword','UserController@getChangePassword');
Route::post('changepassword','UserController@changePassword');
Route::get('paginate','UserController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//coordinator route
Route::get('view-notification','CoordinatorController@viewNotification');
Route::get('view-publication', 'CoordinatorController@viewPublication');
Route::get('viewprogress','CoordinatorController@viewProjectProgress');



//supervisor route
Route::get('supervisorHome','SupervisorController@index');
Route::get('category-screen','SupervisorController@viewCategory');
Route::view('categoryDetail','SupervisorController@viewCategoryDetail');
Route::get('createcategory','SupervisorController@createCategory');


//challenge Owner route
Route::get('challengeowners','ChallengeOwnerController@index');

//student route
Route::get('challengeowners','ChallengeOwnerController@index');

//team route
Route::get('createteam','TeamController@createTeam');
Route::get('viewteam','TeamController@viewTeam');
Route::get('viewteamDetail','TeamController@getTeamDetail');

//Challenge Routes
Route::get('challenge-screen','IdentifiedChallengeController@getIdentifiedChallenges')->name('challenge-screen.create');
Route::delete('deleteChallenge/{id}','IdentifiedChallengeController@deleteIdentifiedChallenge')->name('deleteChallenge.destroy');
Route::put('editChallenge-screen/{id}','IdentifiedChallengeController@putIdentifiedChallenge')->name('editChallenge-screen.edit');
Route::get('viewchallenge','IdentifiedChallengeController@viewIdentifiedChallenge');


// Task/Schedule route
Route::get('view-schedule', 'ScheduleController@viewSchedule');
Route::get('schedule-screen', 'ScheduleController@getSchedules');
Route::post('schedule','ScheduleController@postSchedule');

// Attendance route
// Route::get('studentAttendance','AttendanceController@getAttendances');
Route::get('view-attendance', 'AttendanceController@viewAttendancePage');
Route::get('attendance', 'AttendanceController@getAttendances');
Route::post('addAttendance','AttendanceController@postAttendance');
Route::get('attendance/{id}','AttendanceController@updateAttendance');

// Publication route

//Report route
Route::get('view-report', 'ReportController@viewReport');





