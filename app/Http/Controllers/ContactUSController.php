<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use App\ContactUS;


class ContactUSController extends Controller

{

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function contactUS()

    {

        return view('challenge-owner.contactUS');

    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function contactUSPost(Request $request)

    {

        $this->validate($request, [

        		'name' => 'required',

        		'email' => 'required|email',

        		'message' => 'required'

        	]);


        ContactUS::create($request->all());


        return back()->with('success', 'Thanks for contacting us!');

    }
    
    public function challengeOwnerProfile(){

        return view('challenge-owner.Profile');
        
        }
        
}