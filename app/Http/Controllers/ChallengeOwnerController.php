<?php

namespace App\Http\Controllers;

use App\ChallengeOwner;
use Illuminate\Http\Request;

class ChallengeOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = User::orderBy('id','DESC')->paginate(5);
        // return view('users.index',compact('data'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
        $challengeowners = ChallengeOwner::get();
        return view('admin.users.challengeOwner',['challengeowners'=>$challengeowners]);
    }
    public function challengeOwnerHome()
    {
        return view('challenge-owner.homePage');
    }
}
