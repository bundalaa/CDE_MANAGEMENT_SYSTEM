<?php

namespace App\Http\Controllers;

use App\Challenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class ChallengeController extends Controller
{
    public function getChallenges()
    {
        $challenge = Challenge::all();

        if (REQ::is('api/*'))
            return response()->json(['challenge' => $challenge], 201);
        //for web route
        return view('welcome',);
    }

    public function getChallenge($challengeId)
    {
        $challenge = Challenge::find($challengeId);

        if (!$challenge) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Challenge not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['challenge' => $challenge]);

        ///web route
        return view();
    }

    public function postChallenge(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);



        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }




        $challenge = new Challenge();

        $challenge->name = $request->input('name');
        $challenge->description = $request->input('description');

        $challenge->save();

        if (REQ::is('api/*'))
            return response()->json(['challenge' => $challenge]);

        //for web route
        return view();
    }

    public function putChallenge(Request $request, $challengeId)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $challenge = Challenge::find($challengeId);

        if (!$challenge) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Challenge not found']);
        }


        $challenge->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['challenge' => $challenge]);

        //for web route
        return view();
    }

    public function deleteChallenge($challengeId)
    {
        $challenge = Challenge::find($challengeId);

        if (!$challenge) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Challenge not found']);
        }

        $challenge->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Challenge deleted successfully']);

        ///web route
        return view();
    }
}
