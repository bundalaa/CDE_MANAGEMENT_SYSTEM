<?php

namespace App\Http\Controllers;

use App\ChallengeComment;
use App\ChallengeOwner;
use App\ContactUS;
use App\Coordinator;
use Illuminate\Http\Request;
use App\File;
use App\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FileUpload extends Controller
{
  public function createForm(){
    $coordinators = Coordinator::all();
    $user = Auth::user();
    return view('challenge-owner.file-upload',['coordinators'=>$coordinators,'user'=>$user]);
  }

  public function fileUpload(Request $request){
        $request->validate([
        'file' => 'required|mimes:csv,txt,xlx,png,xls,docx,pdf|max:2048'
        ]);

        $coordinator = Coordinator::find($request->coordinator_id);

        if(!$coordinator){
      return back()->with('success','coordinator not found');
           }
         $fileModel = new File;
        if ($request->file('file')) {
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move(public_path('/files/uploadedChallenges/'),$filename);
            $fileModel->name = time().'_'.$request->file->getClientOriginalName();

            $fileModel ->file=$filename;
        }
            $fileModel->challengeOwner_id=$request['challengeOwner_id'];

            $fileModel->coordinator_id=$request['coordinator_id'];

            $fileModel->save();

            $details=[ 'data'=>'New challenge' ];

            $coordinator->user->notify(new \App\Notifications\fileuploadNotification($details));

            return back()
            ->with('success','File has been uploaded succesfully.')
            ->with('file', $filename);

    }


     public function downloadNewChallenge($file)
        {
          return response()->download(public_path('/files/uploadedChallenges/').$file);
        }


    public function markReadNotify(){
        auth()->user()->unreadNotifications->markAsRead();
        return redirect('newchallenge');
    }


        public function viewNewChallenge()
    {
        $newchallenges = File::paginate(10);
        $contact = ContactUS::paginate(10);

        return view('admin.newchallenge',['newchallenges'=>$newchallenges,'contact'=>$contact]);
    }


    public function get1newchallenge($id)
    {
        $newchallenge=File::find($id);
if(!$newchallenge){
    return back()->with('success','newchallenge not found');
}
$user = Auth::user();
return view('admin.viewNewchallenge1',[
    'newchallenge'=>$newchallenge,'user'=>$user]);
    }


    public function postCommentChallenge(Request $request, $challengeId)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect()->back()->withInput()->withErrors($validator);
        }
        $File = File::find($challengeId);
        if (!$File) {
                return back()->with(['success' => 'File not found']);
        }
        $comment = new ChallengeComment();
        $comment->body = $request->body;
        $comment->coordinator_id=$request['coordinator_id'];
        $File->challengecomments()->save($comment);
        return redirect('newchallenge')
        ->with('success', 'comment added successfully');
    }

}
