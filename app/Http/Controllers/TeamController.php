<?php

namespace App\Http\Controllers;

use App\Student;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as REQ;
use Illuminate\Support\Facades\Validator;


class TeamController extends Controller
{
    public function getTeams()
    {
        $team = Team::all();

        if (REQ::is('api/*'))
            return response()->json(['Team' => $team], 201);
        //for web route
        return view('welcome',);
    }

    public function getTeam($teamId)
    {
        $team = Team::find($teamId);

        if (!$team) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Team not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Team' => $team]);

        ///web route
        return view();
    }

    public function postTeam(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'supervisor_id' => 'required',
            'category_id' => 'required',
        ]);


        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 404);
        }

        $team = new Team();
        $team->supervisor_id = $request->supervisor_id;
        $team->category_id = $request->category_id;

        $team->save();

        if (REQ::is('api/*'))
            return response()->json(['Team' => $team]);

        //for web route
        return view();
    }

    public function putTeam(Request $request, $teamId)
    {

        $validator = Validator::make($request->all(), [
            'supervisor_id' => 'required',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $team = Team::find($teamId);

        if (!$team) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Team not found']);
        }


        $team->update([
            'supervisor_id' => $request->input('supervisor_id'),
            'category_id' => $request->input('category_id'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Team' => $team]);

        //for web route
        return view();
    }

    public function deleteTeam($teamId)
    {
        $team = Team::find($teamId);

        if (!$team) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Team not found']);
        }

        $team->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Team deleted successfully']);

        ///web route
        return view();
    }
    public function addStudentToTeam(Request $request){
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
            'team_id' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }
        $student = Student::find($request->student_id);

        if (!$student) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Student not found']);
        }
        $team = Team::find($request->team_id);

        if (!$team) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Team not found']);
        }
        $student->update(['team_id' => $request->input('team_id'),
        'student_id' => $request->input('student_id'),]);

        if (REQ::is('api/*'))
            return response()->json(['Team' => $team]);
    }
    public function addChallengeToTeam(Request $request){
        $validator = Validator::make($request->all(), [
            'team_id' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }
        $student = Student::find($request->student_id);

        if (!$student) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Student not found']);
        }
        $team = Team::find($request->team_id);

        if (!$team) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Team not found']);
        }
        $student->update(['team_id' => $request->input('team_id'),
        'student_id' => $request->input('student_id'),]);

        if (REQ::is('api/*'))
            return response()->json(['Team' => $team]);
    }
}
