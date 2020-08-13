<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\IdentifiedChallenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class ChallengeController extends Controller
{
    public function getChallenge()
    {
        $challenges = Challenge::paginate(10);
      return view('admin.challenge',['challenges'=>$challenges]);
    }

    public function getIdentifiedChallenges($id)
    {
        $challenge = Challenge::where('id', $id)->first();
        $identifiedChallenges = IdentifiedChallenge::paginate(10);
      return view('admin.viewIdentifiedChallenge-screen',['challenge'=>$challenge,'identifiedChallenges'=>$identifiedChallenges]);
    }

    public function viewChallenge()
    {
        $challenges = Challenge::get();
      return view('supervisor.challenge-screen',['challenges'=>$challenges]);
    }

    public function viewChallengeDetails($id){
        $challenge = Challenge::where('id', $id)->first();
        return view('supervisor.challengeDetails',['challenge'=>$challenge]);
    }

    public function viewcreateChallenges(){
        return view('supervisor.createChallenge');
    }

    public function getChallengesScreen(){
        $challenges = Challenge::get();
        return view('supervisor.challenge-screen',['challenges'=>$challenges]);
    }

    public function viewaddidentifiedchallenge($id){
         $challenge = IdentifiedChallenge::where('challenge_id',$id)->first();;
        return view('supervisor.addIdentifiedChallenge',['id'=>$id,'challenge'=>$challenge]);
    }

    public function addChallenges(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
            $challenge = new Challenge();
            $challenge->name = $request['name'];
            $challenge->description = $request['description'];;
            $challenge->save();
        return redirect('supervisorHome')
        ->with('message','Challenge created successfully');
    }

    public function updateChallenge(Request $request){
        $challenge = Challenge::where('id',$request['id'])->first();
        $challenge->name=$request['name'];
        $challenge->description = $request['description'];
        $challenge->save();
return redirect('supervisorHome')->with('message','Challenge updated successfully');
    }

    public function deleteChallenge($challengeId)
    {
       $challenge = Challenge::find($challengeId);

        if (!$challenge) {
               return back()->withErrors('Challenge not found');
       }
        $challenge->delete();
            return redirect('viewchallenge')->with('Challenge deleted successfuly');
    }

    ///student module
    public function getProj()
    {
      return view('student.StudentChallengeView');
    }
}
