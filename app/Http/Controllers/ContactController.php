<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Supervisor;

class ContactController extends Controller
{
  /// student module
  public function stundMessage()
  {
    $contacts=Contact::all();

    return view('student.StudentSendMessage',['contacts'=>$contacts]);
  }
  public function sendSMS(request $request)
  {
    $this->validate($request, [

        'name' => 'required',

        'subject' => 'required',

        'message' => 'required|max:400',

    ]);
    Contact::create($request->all());
    return  redirect()->back()->with('response','Thank you, Your message has been successfully sent.');

  }

}
