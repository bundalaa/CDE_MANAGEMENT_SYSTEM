<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use App\ContactUS;
use App\Coordinator;
use Illuminate\Support\Facades\Auth;

class ContactUSController extends Controller

{

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function contactUS()

    {
        $coordinators = Coordinator::all();
        return view('challenge-owner.contactUS',['coordinators'=>$coordinators]);
    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function contactUSPost(Request $request)
    {
        // dd($request);
        $this->validate($request, [

        		'name' => 'required',

        		'email' => 'required|email',

                'message' => 'required',

                // 'coordinator_id' => 'required'

            ]);

        //     $coordinator = Coordinator::find($request->coordinator_id);

        //     if(!$coordinator){
        //   return back()->with('success','coordinator not found');
        //        }
        ContactUS::create($request->all());

        // $details=[ 'data'=>'New message' ];

        // $coordinator->user->notify(new \App\Notifications\fileuploadNotification($details));

        return back()->with('success', 'Thanks for contacting us!');
    }

    public function challengeOwnerProfile(){

        return view('challenge-owner.Profile');

        }

}
