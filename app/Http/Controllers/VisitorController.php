<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class VisitorController extends Controller
{
    public function getVisitors()
    {
        $Visitor = Visitor::all();

        if (REQ::is('api/*'))
            return response()->json(['Visitor' => $Visitor], 201);
        //for web route
        return view('welcome',);
    }

    public function getVisitor($visitorId)
    {
        $Visitor = Visitor::find($visitorId);

        if (!$Visitor) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Visitor not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Visitor' => $Visitor]);

        ///web route
        return view();
    }

    public function postVisitor(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);



        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }




        $Visitor = new Visitor();

        $Visitor->name = $request->input('name');
        $Visitor->description = $request->input('description');

        $Visitor->save();

        if (REQ::is('api/*'))
            return response()->json(['Visitor' => $Visitor]);

        //for web route
        return view();
    }

    public function putVisitor(Request $request, $visitorId)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $Visitor = Visitor::find($visitorId);

        if (!$Visitor) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Visitor not found']);
        }


        $Visitor->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Visitor' => $Visitor]);

        //for web route
        return view();
    }

    public function deleteVisitor($visitorId)
    {
        $Visitor = Visitor::find($visitorId);

        if (!$Visitor) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Visitor not found']);
        }

        $Visitor->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Visitor deleted successfully']);

        ///web route
        return view();
    }
}
