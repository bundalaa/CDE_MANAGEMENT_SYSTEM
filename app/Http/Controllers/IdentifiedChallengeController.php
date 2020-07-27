<?php

namespace App\Http\Controllers;

use App\Events\ChallengeCreatedEvent;
use App\IdentifiedChallenge;
use App\Status;
use App\Task;
use Illuminate\Http\Request;

class IdentifiedChallengeController extends Controller
{
    public function  viewIdentifiedChallengeDetail($id){
        $identifiedChallenge = IdentifiedChallenge::where('id', $id)->first();
        return view('supervisor.identifiedChallengeDetails',['identifiedChallenge'=>$identifiedChallenge]);
    }

    public function  viewFillProgress($id){
        $identifiedChallenge = IdentifiedChallenge::where('id', $id)->first();
        $tasks=Task::all();
        $statuses=Status::all();
        return view('supervisor.fillProgress',['statuses'=>$statuses,'tasks'=>$tasks,'identifiedChallenge'=>$identifiedChallenge]);
    }

    public function  postFillProgress(Request $request){
        // $request->validate([
        //     'status_id' => 'required',
        // ]);
         return $task = Task::where('id',$request->id)->first();

               $task->update([
            'status_id' => $request->status_id,
              ]);
        return view('supervisor.fillProgress');
    }


    public function viewcreateIdentifiedChallenges(){
        return view('supervisor.addIdentifiedChallenge');
    }

    public function viewIdentifiedChallenges()
    {
        $identifiedChallenges = IdentifiedChallenge::get();
      return view('supervisor.identifiedchallenge-screen',['identifiedChallenges'=>$identifiedChallenges]);
    }

    public function index()
    {
        $identifiedChallenges = IdentifiedChallenge::get();
      return view('supervisor.supervisorHome',['identifiedChallenges'=>$identifiedChallenges]);
    }

    public function getIdentifiedChallenges(){
        $identifiedChallenges = IdentifiedChallenge::get();
        return view('supervisor.identifiedchallenge-screen',['identifiedChallenges'=>$identifiedChallenges]);
    }

    public function addIdentifiedChallenges(Request $request){
        $request->validate([
            'name' => 'required',
            'challenge_id' => 'required',
            'description' => 'required',
        ]);
            $identifiedChallenge = new IdentifiedChallenge();
            $identifiedChallenge->name = $request['name'];
            $identifiedChallenge->challenge_id = $request['challenge_id'];
            $identifiedChallenge->description = $request['description'];;
            $identifiedChallenge->save();
            event(new ChallengeCreatedEvent( $identifiedChallenge));
        return redirect('challenge-screen')
        ->with('message','Sub challenge created successfully');
    }

    public function updateidentifiedChallenge(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $identifiedChallenges = IdentifiedChallenge::where('id',$request['id'])->first();

        $identifiedChallenges->name=$request['name'];
        $identifiedChallenges->description = $request['description'];
        $identifiedChallenges->save();
return redirect('supervisorHome')->with('message','Sub Challenge updated successfully');
    }

    public function deleteIdentifiedChallenge($identifiedChallengeId)
    {
       $identifiedChallenge = IdentifiedChallenge::find($identifiedChallengeId);

        if (!$identifiedChallenge) {
               return back()->withErrors('IdentifiedChallenge not found');
       }
        $identifiedChallenge->delete();
            return redirect('viewidentifiedchallenges')->with('IdentifiedChallenge deleted successfuly');
    }
}
