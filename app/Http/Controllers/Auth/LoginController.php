<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo(){
        if(Auth::user()-> hasRole ('admin')){
             $this->redirectTo = route('adminIndex');
             return $this->redirectTo;
        }
        elseif(Auth::user()-> hasRole('supervisor')){
            $this->redirectTo = route('supervisorHome');
             return $this->redirectTo;
        }
        elseif(Auth::user()-> hasRole('student')){
            $this->redirectTo = route('studentHome');
             return $this->redirectTo;
        }
        elseif(Auth::user()-> hasRole('challengeowner')){
            $this->redirectTo = route('homePage');
             return $this->redirectTo;
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
}
