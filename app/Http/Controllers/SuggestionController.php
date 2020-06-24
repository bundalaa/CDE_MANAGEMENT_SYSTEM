<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class SuggestionController extends Controller
{
    public function getSuggestions()
    {
        $Suggestion = Suggestion::all();

        if (REQ::is('api/*'))
            return response()->json(['Suggestion' => $Suggestion], 201);
        //for web route
        return view('welcome',);
    }

    public function getSuggestion($suggestionId)
    {
        $Suggestion = Suggestion::find($suggestionId);

        if (!$Suggestion) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Suggestion not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Suggestion' => $Suggestion]);

        ///web route
        return view();
    }

    public function postSuggestion(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }
        $Suggestion = new Suggestion();

        $Suggestion->name = $request->input('name');
        $Suggestion->description = $request->input('description');

        $Suggestion->save();

        if (REQ::is('api/*'))
            return response()->json(['Suggestion' => $Suggestion]);

        //for web route
        return view();
    }

    public function putSuggestion(Request $request, $suggestionId)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $Suggestion = Suggestion::find($suggestionId);

        if (!$Suggestion) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Suggestion not found']);
        }


        $Suggestion->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Suggestion' => $Suggestion]);

        //for web route
        return view();
    }

    public function deleteSuggestion($suggestionId)
    {
        $Suggestion = Suggestion::find($suggestionId);

        if (!$Suggestion) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Suggestion not found']);
        }

        $Suggestion->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Suggestion deleted successfully']);

        ///web route
        return view();
    }
}
