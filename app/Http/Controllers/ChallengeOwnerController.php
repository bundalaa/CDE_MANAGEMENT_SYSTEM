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
    public function challengeOwnerHome()
    {
        return view('challenge-owner.homePage');
    }
}
