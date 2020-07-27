<?php

use App\ProjectProgress;
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
Route::get('/','UserController@getLatestUsers')->name('/');
Route::post('editUserSave','UserController@updateUser')->name('editUserSave');
Route::post('createnewuser','UserController@postUser')->name('createnewuser');
Route::get('createuser','UserController@createUser')->name('createuser');
// Route::get('viewedituser','UserController@viewEditUser')->name('viewedituser');
Route::get('editUser/{id}','UserController@getEditUser')->name('editUser');
Route::get('profile','UserController@profile')->name('profile');
Route::post('update-avatar','UserController@updateAvatar')->name('update-avatar');
Route::post('edituserprofile','UserController@updateUserProfile')->name('edituserprofile');
Route::get('user-screen','UserController@getUsers')->name('user-screen');
Route::delete('deleteUser/{id}','UserController@deleteUser')->name('deleteUser');
Route::get('getchangepassword','UserController@getChangePassword')->name('getchangepassword');
Route::post('changepassword','UserController@changePassword')->name('changepassword');

//coordinator route
Route::get('viewcoordinatorscreen','UserController@viewCoordinators')->name('viewcoordinatorscreen');
Route::get('getCoordinator','CoordinatorController@getCoordinator')->name('getCoordinator');
Route::get('view-notification','CoordinatorController@viewNotification')->name('view-notification');
Route::get('view-publication', 'CoordinatorController@viewPublication')->name('view-publication');
Route::get('viewprogress','CoordinatorController@viewProjectProgress')->name('viewprogress');
Route::get('getchallenge','ChallengeController@getChallenge')->name('getchallenge');
Route::get('viewcoordinator','CoordinatorController@viewCoordinators')->name('viewcoordinators');


//supervisor route
Route::get('viewsupervisorsscreen','UserController@viewSupervisors')->name('viewsupervisorsscreen');

//challenge controller
Route::post('addChallenge','ChallengeController@addChallenges')->name('addChallenge');
Route::get('viewchallengedetail/{id}','ChallengeController@viewChallengeDetails')->name('viewchallengedetail');
Route::get('challenge-screen','ChallengeController@getChallengesScreen')->name('challenge-screen');
Route::get('viewcreatechallenge','ChallengeController@viewcreateChallenges')->name('viewcreatechallenge');
Route::get('viewaddidentifiedchallenge/{id}','ChallengeController@viewaddidentifiedchallenge')->name('viewaddidentifiedchallenge');
Route::post('editchallenge-screen','ChallengeController@updateChallenge')->name('editchallenge-screen');
Route::delete('deleteChallenge/{id}','ChallengeController@deleteChallenge')->name('deleteChallenge');
Route::get('getidentifiedchallenges/{id}','ChallengeController@getIdentifiedChallenges')->name('getidentifiedchallenges');

//IdentifiedChallenge controller
Route::post('addidentifiedchallenges','IdentifiedChallengeController@addIdentifiedChallenges')->name('addidentifiedchallenges');
Route::get('supervisorHome','IdentifiedChallengeController@index')->name('supervisorHome');
Route::delete('deleteSubChallenge/{id}','IdentifiedChallengeController@deleteIdentifiedChallenge')->name('deleteSubChallenge');
Route::post('editidentifiedchallenge-screen','IdentifiedChallengeController@updateidentifiedChallenge')->name('editidentifiedchallenge-screen');
Route::get('viewidentifiedchallenges','IdentifiedChallengeController@viewIdentifiedChallenges')->name('viewidentifiedchallenges');
Route::get('viewidentifiedchallengedetail/{id}','IdentifiedChallengeController@viewIdentifiedChallengeDetail')->name('viewidentifiedchallengedetail');


//challenge Owner route
Route::get('challengeowners','ChallengeOwnerController@index')->name('challengeowners');

//student route
Route::get('viewstudentsscreen','UserController@viewStudents')->name('viewstudentsscreen');

//team route
Route::get('viewcreateteam','TeamController@viewCreateTeam')->name('viewcreateteam');
Route::get('viewteam','TeamController@viewTeam')->name('viewteam');
Route::get('viewteamDetail/{id}','TeamController@teamTeamDetails')->name('viewteamDetail');
Route::post('createteam','TeamController@createTeam')->name('createteam');
Route::get('editteam/{id}','TeamController@getEditTeam')->name('editteam');
Route::post('createteam','TeamController@createTeam')->name('createteam');
Route::get('viewaddStudentToTeam/{id}','TeamController@viewaddStudentToTeam')->name('viewaddStudentToTeam');
Route::post('addStudentToTeam','TeamController@addStudentToTeam')->name('addStudentToTeam');
Route::get('viewaddstudentpage/{id}','TeamController@viewaddstudentpage')->name('viewaddstudentpage');


// Task/Schedule route
Route::get('view-schedule', 'ScheduleController@getSchedules')->name('view-schedule');
Route::post('schedule','ScheduleController@postSchedule')->name('schedule');
Route::post('schedules','ScheduleController@editSchedule')->name('schedules');

// Attendance route
Route::get('view-attendance', 'AttendanceController@viewAttendancePage')->name('view-attendance');
Route::get('getAttendanceReport', 'AttendanceController@getAttendanceReport')->name('getAttendanceReport');
Route::post('addAttendance','AttendanceController@postAttendance')->name('addAttendance');
Route::get('getReport/{id}', 'AttendanceController@getReport')->name('getReport');


// challengeProgressForm route
Route::get('view-projectProgressForm','ProjectProgressController@viewProgressForm')->name('view-projectProgressForm');

//Report route
Route::get('view-report', 'ReportController@viewReport')->name('view-report');
Route::get('downloadReport{id}', 'ReportController@readReport')->name('downloadReport');

//Permission route
Route::get('permission', 'PermissionController@assign')->name('permission');
// Route::post('/permission', 'PermissionController@assignPermission');


//// student module
Route::get('studentHome', 'StudentController@stunhome')->name('studentHome');
Route::get('StudenSchedule', 'StudentController@stunschedule')->name('StudenSchedule');
Route::get('studentReport', 'ReportController@stunUpload')->name('studentReport');
Route::post('studentReport', 'ReportController@PostReport')->name('studentReport');
Route::get('FypConfirm', 'StudentController@confirm')->name('FypConfirm');
Route::get('StudentProjectView', 'StudentController@getProj')->name('StudentProjectView');

Route::get('stuProfile',  ['as' => 'student.stuProfile', 'uses' => 'StudentController@edit']);
Route::get('/studentReport/{id}','ReportController@show')->name('supervisor.reports');




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
