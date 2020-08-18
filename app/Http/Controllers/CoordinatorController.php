<?php

namespace App\Http\Controllers;

use App\ContactUS;
use App\Coordinator;
use App\IdentifiedChallenge;
use App\Messagecomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class CoordinatorController extends Controller
{
    public function viewProjectProgress()
    {
        $identifiedchallenges = IdentifiedChallenge::paginate(4);

        foreach ($identifiedchallenges as $identifiedchallenge) {
            $identifiedchallenge->tasks;
        }

        return view('admin.progress', ['identifiedchallenges' => $identifiedchallenges]);
    }

    public function viewNewChallenge()
    {
        return view('admin.newchallenge',);
    }
    public function viewCoordinators()
    {
        $coordinators = Coordinator::get();
        return view('admin.users.coordinator', ['coordinators' => $coordinators]);
    }
    // public function postCoordinator(Request $request)
    // {

    //     $validator = Validator::make($request->all(), [
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
    //     if ($validator->fails()) {
    //         redirect('/');
    //         $Coordinator = new Coordinator();
    //         $Coordinator->username = $request->input('username');
    //         $Coordinator->password = $request->input('password');
    //         $Coordinator->save();

    //         //for web route
    //         return view('/home');
    //     }
    public function contactUs(){
        $contacts = ContactUS::all();
        return view('admin.viewcontactUs',['contacts'=>$contacts]);
    }

    // public function composemessageA(){
    //     $user = Auth::user();
    //     return view('admin.composeA',['user'=>$user]);
    // }

    public function composemessageA($id)
    {
         $user = Auth::user();
        $contact=ContactUS::find($id);
if(!$contact){
    return back()->with('success','message not found');
}
        return view('admin.composeA',[
            'contact'=>$contact,'user'=>$user]);

    }

    public function postCommentMessage(Request $request, $contactUsId)
    {
        // dd($contactUsId);
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect()->back()->withInput()->withErrors($validator);
        }
        // $contactUs = ContactUs::find($contactUsId);
        // if (!$contactUs) {
        //         return back()->with(['success' => 'Message not found']);
        // }
        // $comment = new Messagecomment();
        // $comment->body = $request->body;
        // $comment->coordinator_id=$request['coordinator_id'];

        // $contactUs->messagecomments()->save($comment);
        return redirect('adminIndex')
        ->with('success', 'message added successfully');
    }

    }




