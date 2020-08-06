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
Auth::routes();

Route::get('AboutUS', function () {
    return view('ChallengeOwner.AboutUS');
});

Route::get('/', function(){
    return view('welcome');

Route::get('AboutUS', function () {
    return view('challenge-owner.AboutUS');
});

//challenge Owner route
Route::get('challengeownerHome','ChallengeOwnerController@challengeownerHome')->name('challengeownerHome');

Route::get('upload', function () {
    return view('challenge-owner.file-upload');
});
// Route::get('/home', function () {
//     return view('ChallengeOwner.homePg');
// });


// Route::get('/', function () {
//     return view('top-nav');
// });

// Route::get('upload', function () {
//     return view('file-upload');
// });



Route::get('feedback','FeedbackController@feedback')->name('feedback');

Route::get('publication', function () {
    return view('challenge-owner.publication');
});

Route::get('feedback', function () {
    return view('challenge-owner.feedback');
});

Route::get('contact-us', 'ContactUSController@contactUS');

Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Route::get('chart-js', 'ChartController@index');

// Create file upload form
Route::get('/upload-file', 'FileUpload@createForm');

// Store file
Route::post('/upload-file', 'FileUpload@fileUpload')->name('fileUpload');

// Route::get('login', 'AuthController@index');
// Route::post('post-login', 'AuthController@postLogin');
// Route::get('registration', 'AuthController@registration');
// Route::post('post-registration', 'AuthController@postRegistration');
// Route::get('dashboard', 'AuthController@dashboard');
// Route::get('logout', 'AuthController@logout')->name('logout');

Route::get('file', 'MultipleFileController@index');

Route::get('dashboard', 'AuthController@dashboard'); 
Route::post('save', 'MultipleFileController@save')->name('file.save');


////admn and supervisor routes
Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('/admin-index', 'AdminController' , ['except' => ['show' , 'create' ,'store' , 'edit' , 'destroy' , 'update']]);
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

//////administrator Module
// User Routes
Route::get('adminIndex','UserController@getLatestUsers')->name('adminIndex');
Route::post('editUserSave','UserController@updateUser')->name('editUserSave');
Route::post('createnewuser','UserController@postUser')->name('createnewuser');
Route::get('createuser','UserController@createUser')->name('createuser');
// Route::get('viewedituser','UserController@viewEditUser')->name('viewedituser');
Route::get('editUser/{id}','UserController@getEditUser')->name('editUser');
Route::get('userprofile','UserController@profile')->name('userprofile');
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
Route::get('view-newChallenge', 'CoordinatorController@viewNewChallenge')->name('view-newChallenge');
Route::get('viewprogress','CoordinatorController@viewProjectProgress')->name('viewprogress');
Route::get('getchallenge','ChallengeController@getChallenge')->name('getchallenge');
Route::get('viewcoordinator','CoordinatorController@viewCoordinators')->name('viewcoordinators');
Route::get('inboxmessageA','CoordinatorController@InboxMessageA')->name('inboxmessageA');
Route::get('composemessageA','CoordinatorController@ComposeMessageA')->name('composemessageA');
Route::get('readmessageA','CoordinatorController@ReadMessageA')->name('readmessageA');

//supervisor route
Route::get('viewsupervisorsscreen','UserController@viewSupervisors')->name('viewsupervisorsscreen');
Route::get('supervisorHome','SupervisorController@index')->name('supervisorHome');
Route::get('supervisorprofile','SupervisorController@profile')->name('supervisorprofile');

//challenge controller
Route::post('addChallenge','ChallengeController@addChallenges')->name('addChallenge');
Route::get('viewchallengedetail/{id}','ChallengeController@viewChallengeDetails')->name('viewchallengedetail');
Route::get('challenge-screen','ChallengeController@getChallengesScreen')->name('challenge-screen');
Route::get('viewcreatechallenge','ChallengeController@viewcreateChallenges')->name('viewcreatechallenge');
Route::get('viewaddidentifiedchallenge/{id}','ChallengeController@viewaddidentifiedchallenge')->name('viewaddidentifiedchallenge');
Route::post('editchallenge-screen/{id}','ChallengeController@updateChallenge')->name('editchallenge-screen');
Route::delete('deleteChallenge/{id}','ChallengeController@deleteChallenge')->name('deleteChallenge');
Route::get('getidentifiedchallenges/{id}','ChallengeController@getIdentifiedChallenges')->name('getidentifiedchallenges');
Route::get('viewFillProgress/{id}','IdentifiedChallengeController@viewFillProgress')->name('viewFillProgress');

//IdentifiedChallenge controller
Route::post('addidentifiedchallenges','IdentifiedChallengeController@addIdentifiedChallenges')->name('addidentifiedchallenges');
Route::get('supervisorHome','IdentifiedChallengeController@index')->name('supervisorHome');
Route::post('editidentifiedchallenge-screen/{id}','IdentifiedChallengeController@updateidentifiedChallenge')->name('editidentifiedchallenge-screen');
Route::get('viewidentifiedchallenges','IdentifiedChallengeController@viewIdentifiedChallenges')->name('viewidentifiedchallenges');
Route::get('viewidentifiedchallengedetail/{id}','IdentifiedChallengeController@viewIdentifiedChallengeDetail')->name('viewidentifiedchallengedetail');
Route::post('postFillProgress','IdentifiedChallengeController@postFillProgress')->name('postFillProgress');

//challenge Owner route
Route::get('challengeowners','ChallengeOwnerController@index')->name('challengeowners');

//student route
Route::get('viewstudentsscreen','UserController@viewStudents')->name('viewstudentsscreen');

//team route
Route::get('viewcreateteam','TeamController@viewCreateTeam')->name('viewcreateteam');
Route::get('viewteam','TeamController@viewTeam')->name('viewteam');
Route::get('viewteamDetail/{id}','TeamController@teamDetails')->name('viewteamDetail');
Route::post('createteam','TeamController@createTeam')->name('createteam');
Route::get('geteditteam/{id}','TeamController@getEditTeam')->name('geteditteam');
Route::post('createteam','TeamController@createTeam')->name('createteam');
Route::get('viewaddStudentToTeam/{id}','TeamController@viewaddStudentToTeam')->name('viewaddStudentToTeam');
Route::post('addStudentToTeam','TeamController@addStudentToTeam')->name('addStudentToTeam');
Route::get('viewaddstudentpage/{id}','TeamController@viewaddstudentpage')->name('viewaddstudentpage');
Route::delete('deleteTeam/{id}','TeamController@deleteTeam')->name('deleteTeam');
Route::post('editteam/{id}','TeamController@updateTeam')->name('editteam');


// Task/Schedule route
Route::get('view-schedule', 'ScheduleController@getSchedules')->name('view-schedule');
Route::post('add-schedule','ScheduleController@postSchedule')->name('add-schedule');
Route::get('deleteSchedule/{id}','ScheduleController@deleteSchedule')->name('deleteSchedule');

// Attendance route
Route::get('view-attendance', 'AttendanceController@viewAttendancePage')->name('view-attendance');
Route::get('getAttendanceReport', 'AttendanceController@getAttendanceReport')->name('getAttendanceReport');
Route::post('addAttendance','AttendanceController@postAttendance')->name('addAttendance');
Route::get('getReport/{id}', 'AttendanceController@getReport')->name('getReport');


// challengeProgressForm route
Route::get('view-projectProgressForm','ProjectProgressController@viewProgressForm')->name('view-projectProgressForm');

//Report route
Route::get('view-report', 'ReportController@viewReport')->name('view-report');
Route::get('get1Report{id}', 'ReportController@get1Report')->name('get1Report');
Route::post('postCommentReport/{id}', 'ReportController@postCommentReport')->name('postCommentReport');
Route::get('downloadReport{id}', 'ReportController@readReport')->name('downloadReport');
Route::get('markReadNotification', 'ReportController@markReadNotification')->name('markReadNotification');


//Permission route
Route::get('permission', 'PermissionController@assign')->name('permission');
// Route::post('/permission', 'PermissionController@assignPermission');

////End of admin and supervisor routes


// student module
Route::get('studentHome', 'StudentController@stunhome')->name('studentHome');
Route::get('StudenSchedule', 'ScheduleController@stunschedule')->name('StudenSchedule');
Route::get('studentReport', 'ReportController@stunUpload')->name('studentReport');
Route::post('studentReport', 'ReportController@PostReport')->name('studentReport');
Route::get('StudentChallengeView', 'ChallengeController@getProj')->name('StudentChallengeView');
Route::get('StudentTeamView', 'StudentController@teamView')->name('StudentTeamView');

Route::get('StudentSendMessage','CommentController@stundMessage')->name('StudentSendMessage');

Route::get('stuProfile',  ['as' => 'student.stuProfile', 'uses' => 'UserController@edit']);
Route::post('/Addprofile','UserController@AddProfile');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');