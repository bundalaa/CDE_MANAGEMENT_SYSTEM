<?php

namespace App\Http\Controllers;
use Auth;
use App\Student;
use App\Team;
use App\Supervisor;
use DB;
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

    public function stunUpload()
    {
     return view('student.studentReport');
    }

    public function teamView()
    {
        $teams=Team::all();

return view('student.StundentTeamView',['teams'=>$teams]);
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
    public function update(User $user)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();
    }

}
