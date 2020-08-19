<?php

namespace App\Http\Controllers;

use App\Coordinator;
use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function getFeedbacks()
    {
        $feedback = Feedback::all();

        if (REQ::is('api/*'))
            return response()->json(['Feedback' => $feedback], 201);
        //for web route
        return view('welcome',);
    }

    public function getFeedback($feedbackId)
    {
        $feedback = Feedback::find($feedbackId);

        if (!$feedback) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Feedback not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Feedback' => $feedback]);

        ///web route
        return view();
    }

    public function postFeedback(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);



        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }




        $feedback = new Feedback();

        $feedback->name = $request->input('name');
        $feedback->description = $request->input('description');

        $feedback->save();

        if (REQ::is('api/*'))
            return response()->json(['Feedback' => $feedback]);

        //for web route
        return view();
    }

    public function putFeedback(Request $request, $feedbackId)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $feedback = Feedback::find($feedbackId);

        if (!$feedback) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Feedback not found']);
        }


        $feedback->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Feedback' => $feedback]);

        //for web route
        return view();
    }

    public function deleteFeedback($feedbackId)
    {
        $feedback = Feedback::find($feedbackId);

        if (!$feedback) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Feedback not found']);
        }

        $feedback->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Feedback deleted successfully']);

        ///web route
        return view();

    }
    //challengeOwner module


    //Project status
    public function feedback(){
        $user = Auth::user();
        $coordinators = Coordinator::all();
        $feedbacks= DB::table('identified_challenges')->get();
        view()->share('feedbacks', $feedbacks);
        return view('challenge-owner.feedback',['user'=>$user,'coordinators'=>$coordinators]);
    }


  //report summary

public function pdfview(Request $request )
{

    $feedbacks = DB::table("identified_challenges")->get();
    view()->share('feedbacks',$feedbacks);


    if($request->has('download')){
        $pdf = PDF::loadView('challenge-owner.pdfview');
        return $pdf->download('pdfview.pdf');
    }


    return view('challenge-owner.pdfview');
}
}
