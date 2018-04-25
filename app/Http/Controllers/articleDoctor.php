<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Illuminate\Http\Request;

class articleDoctor extends Controller
{
    //
    public function __construct(){
      $this->Middleware(function($request,$next){

        if(Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')){
          $checkdoctor = DB::table('users')->where('email',Session::get('username'))->first();
          if($checkdoctor->is_Doctor != 1 || $checkdoctor->is_Doctor == 0){

            return response('You Are not Authorizes for this page  only for registered doctors !!! <a href="/"> home</a>');

          }else {

            return view('writeArticle');

          }
        }

      return $next($request);
      });
    }
}
