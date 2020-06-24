<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class GoalController extends Controller
{
    public function getGoals()
    {
        $Goal = Goal::all();

        if (REQ::is('api/*'))
            return response()->json(['Goal' => $Goal], 201);
        //for web route
        return view('welcome',);
    }

    public function getGoal($goalId)
    {
        $Goal = Goal::find($goalId);

        if (!$Goal) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Goal not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Goal' => $Goal]);

        ///web route
        return view();
    }

    public function postGoal(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'Goalable_id'=>'Goalable_id',
            'Goalable_type'=>'Goalable_type'
        ]);
        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }
        $Goal = new Goal();
        $Goal->name = $request->input('name');
        $Goal->description = $request->input('description');
        $Goal->save();
        if (REQ::is('api/*'))
            return response()->json(['Goal' => $Goal]);
        //for web route
        return view();
    }

    public function putGoal(Request $request, $goalId)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $Goal = Goal::find($goalId);

        if (!$Goal) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Goal not found']);
        }

        $Goal->update([
            'description' => $request->input('description'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Goal' => $Goal]);

        //for web route
        return view();
    }

    public function deleteGoal($goalId)
    {
        $Goal = Goal::find($goalId);

        if (!$Goal) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Goal not found']);
        }

        $Goal->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Goal deleted successfully']);

        ///web route
        return view();
    }
}
