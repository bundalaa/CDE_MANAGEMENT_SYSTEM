<?php

namespace App\Http\Controllers;

use App\IdentifiedChallenge;
use App\Student;
use App\Supervisor;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as REQ;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{

    public function viewaddstudentpage($id)
    {
        $students = Student::where('team_id',$id)->get();

        return view('supervisor.addStudentToTeam',['id'=> $id,'students'=>$students]);
    }

    public function viewCreateTeam()
    {
        $challenges=IdentifiedChallenge::all();
        $supervisors=Supervisor::all();
        return view('supervisor.createteam',['challenges'=>$challenges,'supervisors'=>$supervisors]);
    }

    public function teamDetails($id)
    {
        // return $id;
        $students = Student::where('team_id',$id)->get();
        // dd($students);
        return view('supervisor.teamDetails', ['id' => $id, 'students' => $students]);
    }

    public function viewTeam()
    {
        $teams = Team::all();

        foreach ($teams as $team) {
            $team->identifiedChallenge;
            $team->supervisor;
        }

        return view('supervisor.teams', ['teams' => $teams]);
    }

    public function getEditTeam()
    {
        $team = Team::all();

        foreach ($team as $team) {
            $team->identifiedChallenge;
        }
        return view('supervisor.teamDetail',['team'=>$team]);
    }

    public function createTeam(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'supervisor_id' => 'required',
            'identified_challenge_id' => 'required|unique:teams'
        ]);
        if($validator->fails())
        {
         return Redirect()->back()->withInput()->withErrors($validator);

        }
        $identifiedChallenge = IdentifiedChallenge::find($request->identified_challenge_id);
        if(! $identifiedChallenge){
            return back()->with('success','challenge not found');
        }
        $supervisor = Supervisor::find($request->supervisor_id);
         if(!$supervisor){
       return back()->with('success','supervisor not found');
        }
        $team = new Team();
        $team->supervisor_id = $supervisor->id;
        $team->identified_challenge_id = $identifiedChallenge->id;
        $team->save();

        $identifiedChallenge->update([
            'status'=>1,
        ]);
        return redirect('viewteam')
            ->with('message', 'Team created successfully');
    }

    public function updateTeam(Request $request){
        $team = Team::where('id',$request['id'])->first();
        $team->identified_challenge_id=$request['identified_challenge_id'];
        $team->save();
return redirect('viewteam')->with('message','Team updated successfully');
    }

    public function deleteTeam($teamId)
    {
        $team = Team::find($teamId);

        if (!$team) {
            return back()->withErrors('Team not found');
        }
        $team->delete();
        return redirect('viewteam')->with('Team deleted successfuly');
    }


    public function addStudentToTeam(Request $request)
    {
        $request->validate([
            'team_id' => 'required',
            'student_id' => 'required'
        ]);
        $student = Student::where('user_id', $request->student_id)->first();
            // $student->team_id = $request['team'];

        $student->update(['team_id' => $request->team_id]);

        $student->save();
        //dd($student);
        return redirect()->route('viewteamDetail',$request->team_id)
            ->with('message', 'student added successfully');
    }

}
