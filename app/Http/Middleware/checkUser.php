<?php

namespace App\Http\Middleware;


use Closure;
use App\Role;
use App\User;
class checkUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $user = User::Select('role_id')->where('id',Auth()->user()->id)->first();
       if($user['role_id']=='1')
       {
           return redirect('/');
       }
        return $next($request);
    }
}
