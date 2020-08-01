<?php

namespace App\Http\Controllers;

use App\Coordinator;
use App\IdentifiedChallenge;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class CoordinatorController extends Controller
{
    public function viewProjectProgress()
    {
        $identifiedchallenges = IdentifiedChallenge::all();

        foreach ($identifiedchallenges as $identifiedchallenge) {
            $identifiedchallenge->tasks;
        }

        // $admin = auth()->user()->coordinator;

        // if(!$admin){
        //    return  redirect('/');
        // }

        return view('admin.progress', ['identifiedchallenges' => $identifiedchallenges]);
    }
    public function viewNotification()
    {
        return view('welcome',);
    }
    public function viewNewChallenge()
    {
        return view('admin.newchallenge',);
    }
    public function viewCoordinators()
    {
        $coordinators = Coordinator::get();
        return view('admin.users.coordinator', ['coordinators' => $coordinators]);
    }
    public function postCoordinator(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            redirect('/');
            $Coordinator = new Coordinator();
            $Coordinator->username = $request->input('username');
            $Coordinator->password = $request->input('password');
            $Coordinator->save();

            //for web route
            return view('/home');
        }
    }

    public function putCoordinator(Request $request, $coordinatorId)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $Coordinator = Coordinator::find($coordinatorId);

        if (!$Coordinator) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Coordinator not found']);
        }

        $Coordinator->update([
            'description' => $request->input('description'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Coordinator' => $Coordinator]);

        //for web route
        return view();
    }

    public function deleteCoordinator($coordinatorId)
    {
        $Coordinator = Coordinator::find($coordinatorId);

        if (!$Coordinator) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Coordinator not found']);
        }

        $Coordinator->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Coordinator deleted successfully']);

        ///web route
        return view();
    }
}
