<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App;
use DB;
class profile extends Controller
{
    //
    public function index($username){
      if(session()->has('username')){
          $ques=App\question::where('user_name', $username)->orderBy('id','desc')->get();
          $answers=App\answer::where('helper_user_name', $username)->orderBy('id','desc')->get();
          $user=DB::table('users')->where('name',$username)->first();
          if($user->email == Session::get('username')){
            return Redirect('/profile/my');
          }
        return view('profile')->with('ques',$ques)->with('answers',$answers)->with('user',$user)->with('self','0');
      }else {
        return redirect('user');

      }

    }
    public function ownpro(){
      if(session()->has('username')){
        $ques=App\question::where('user_email', Session::get('username'))->orderBy('id','desc')->get();
          $answers=App\answer::where('helper_user_email', Session::get('username'))->orderBy('id','desc')->get();
          $user=DB::table('users')->where('email',Session::get('username'))->first();
        return view('profile')->with('ques',$ques)->with('answers',$answers)->with('user',$user)->with('self','1');
      }else {
        return redirect('user');

      }

    }
}
