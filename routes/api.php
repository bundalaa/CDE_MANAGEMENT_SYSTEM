<?php

use App\IdentifiedChallenge;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('statuses/',['uses'=>'StatusController@viewStatus']);

Route::get('/tasks', function () {
    $tasks = Task::all();

    foreach ($tasks as $task ) {
        $task->identifiedChallenge;
    }

    return $tasks;
});

Route::get('/challenges', function () {
    $challenges = IdentifiedChallenge::all();

    foreach ($challenges as $challenge) {
        $challenge->tasks;
    }

    return $challenges;
});

