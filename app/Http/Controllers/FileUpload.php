<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileUpload extends Controller
{
  public function createForm(){
    return view('challenge-owner.file-upload');
  }

  public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,png,xls,docx,pdf|max:2048'
        ]);

        $fileModel = new File;

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded succesfully.')
            ->with('file', $fileName);
        }
    }

    //     public function viewNewChallenge()
    // {
    //     $newchallenges=File::all();

    //     return view('admin.newchallenge',[
    //         'newchallenges'=>$newchallenges]);
    // }


}
