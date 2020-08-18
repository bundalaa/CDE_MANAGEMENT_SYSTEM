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

        return view('contactUS');

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

    //homepage contact us
    public function SendContactMessage(request $request)
    {
        $data=request()->validate([

            'name' => 'required',

            'email' => 'required|email',

            'message' => 'required|max:400',

        ]);
        ContactUS::create($request->all());
        return  redirect()->back()->with('response','Your message has been sent successfully, Thanks for contacting us!.');


    }

}
