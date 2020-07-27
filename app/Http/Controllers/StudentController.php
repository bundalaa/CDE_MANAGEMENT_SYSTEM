<?php

namespace App\Http\Controllers;
use Auth;
use App\Student;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function stunhome()
    {
        return view('student.studentHome');
    }
    public function stunschedule()
    {
      return view('student.StudenSchedule');
    }
    public function stunUpload()
    {
     return view('student.studentReport');
    }
    public function confirm()
    {
      return view('student.FypConfirm');
    }
    public function getProj()
    {
      return view('student.StundentProjectView');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('student.stuProfile', compact('user'));
        
    }

}
