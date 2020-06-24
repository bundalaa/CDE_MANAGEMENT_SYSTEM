<?php

namespace App\Http\Controllers;

use App\Supervisor;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class SupervisorController extends Controller
{
    public function getSupervisors()
    {
        $supervisor = Supervisor::all();

        if (REQ::is('api/*'))
            return response()->json(['supervisor' => $supervisor], 201);
        //for web route
        return view('welcome',);
    }

    public function getSupervisor($supervisorId)
    {
        $supervisor = Supervisor::find($supervisorId);

        if (!$supervisor) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Supervisor not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Supervisor' => $supervisor]);

        ///web route
        return view();
    }

    public function postSupervisor(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'title' => 'required',
            'bio' => 'required',
        ]);



        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }


        $user = User::find($request->user_id);

        if (!$user)
            return response()->json(['error' => 'user not found'], 404);

        $supervisor = new Supervisor();

        $supervisor->user_id = $request->user_id;
        $supervisor->title = $request->title;
        $supervisor->bio = $request->bio;


        $user->supervisor()->save($supervisor);

        if (REQ::is('api/*'))
            return response()->json(['Supervisor' => $supervisor]);

        //for web route
        return view();
    }

    public function putSupervisor(Request $request, $supervisorId)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'title' => 'required',
            'bio' => 'required',

        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $supervisor = Supervisor::find($supervisorId);

        if (!$supervisor) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Supervisor not found']);
        }


        $supervisor->update([
            'user_id' => $request->input('user_id'),
            'title' => $request->input('title'),
            'bio' => $request->input('bio'),

        ]);

        if (REQ::is('api/*'))
            return response()->json(['Supervisor' => $supervisor]);

        //for web route
        return view();
    }

    public function deleteSupervisor($supervisorId)
    {
        $supervisor = Supervisor::find($supervisorId);

        if (!$supervisor) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Supervisor not found']);
        }

        $supervisor->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Supervisor deleted successfully']);

        ///web route
        return view();
    }
}
