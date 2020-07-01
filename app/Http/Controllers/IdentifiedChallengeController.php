<?php

namespace App\Http\Controllers;

use App\IdentifiedChallenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IdentifiedChallengeController extends Controller
{
    public function viewIdentifiedChallenge()
    {
      return view('admin.challenge');
    }

    public function getIdentifiedChallenges()
    {
        $identifiedChallenge = IdentifiedChallenge::all();
       //for web route
      return view('admin-pages.challenge_screen',compact('identifiedChallenges'));
    }

    public function putIdentifiedChallenge(Request $request, $identifiedChallengeId)
    {

     $validator = Validator::make($request->all(), [
          'name' => 'required',
            'description' => 'required',
        ]);

       if ($validator->fails()) {
            return redirect('admin-pages.challenge_screen');
        }

        $identifiedChallenge = IdentifiedChallenge::find($identifiedChallengeId);

        if (!$identifiedChallenge) {
           return back()->withErrors('IdentifiedChallenge not found');
        }
        $identifiedChallenge->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        return view('admin-pages.challenge_screen');
    }

    public function deleteIdentifiedChallenge($identifiedChallengeId)
    {
       $identifiedChallenge = IdentifiedChallenge::find($identifiedChallengeId);

        if (!$identifiedChallenge) {
               return back()->withErrors('IdentifiedChallenge not found');
       }
        $identifiedChallenge->delete();
            return redirect()->with('IdentifiedChallenge deleted successfuly');
    }
}
