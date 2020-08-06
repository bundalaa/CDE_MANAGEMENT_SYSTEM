<?php

namespace App\Http\Controllers;

use App\IdentifiedChallenge;
use App\Supervisor;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supervisor.supervisorHome');
    }

    public function profile()
    {
        return view('supervisor.profile');
    }

}
