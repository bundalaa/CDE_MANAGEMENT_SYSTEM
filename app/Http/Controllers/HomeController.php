<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showContactus(){

        return view('contact');
    }
    public function generatePDF(){
    
    {

        return view('challenge-owner.ReportSummary');

    }

    {

        $data = ['title' => 'Welcome to HDTuto.com'];

        // $pdf = PDF::loadView('MyPDF', $data);

  

        // return $pdf->download('itsolutionstuff.pdf');

     }

}
}
