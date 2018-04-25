<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Session;
class checkDoc
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
        if(Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')){
          $checkdoctor = DB::table('users')->where('email',Session::get('username'))->first();
              if($checkdoctor->is_Doctor != 1){
                  return response("You Are not Authorizes for this page  only for registered doctors !!! <a href='/'> home</a>");


              }

        }
        else{
          return redirect('/login/doctor');
        }

          return $next($request);


    }
}
