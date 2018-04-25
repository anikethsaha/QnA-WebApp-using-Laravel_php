<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Hash;
use Session;
class loginsys extends Controller
{
  public function justuser(){
    return view('user');
  }
  public function secr($para){
          $para=trim($para);
          $para=  strip_tags($para);
          $para=  stripslashes($para);
          $para=  htmlspecialchars($para);
  return $para;
}
  public function userlogin(Request $req){
        $username=$req->input('username');
        $password=$req->input('password');



        $check=DB::table('users')->where(['email'=>$username])->first();
        if(count($check)>0){
            if(password_verify($password,$check->password)){

              Session::put('username',$username);
              Session::flash('msg','Successfully Login');
              return Redirect('/post');
                } else{
                    $guest="wrong password";
                    Session::flash('error_msg','Wrong password');

                    return redirect('/post');
                  }

        }else {

            $guest="wrong username";
            Session::flash('error_msg','Wrong username');

            return redirect('/post');
        }

  }
  public function userlogup(Request $req){

        $email=$req->input('email');
        $password=$req->input('password');

        $password=bcrypt($password);
        $name=$req->input('Name');
        $r_token=$req->input('token');
        $anonymous_name=$req->input('anonymous_name');
        if($req->hasFile('avatar') && $req->file('avatar')->isValid()){
          if($req->file('avatar')->getClientOriginalExtension() == 'png' || $req->file('avatar')->getClientOriginalExtension() == 'jpg' || $req->file('avatar')->getClientOriginalExtension() == 'jpeg'){
                    $avatar = $req->file('avatar');
                    $avatar->move(public_path().'/userAvatar',$avatar->getClientOriginalName() );
                    $userAvatarName = encrypt($avatar->getClientOriginalName());
                    $data=array('email'=>$email,'name'=>$name,'password'=>$password,'anonymous_name'=>$anonymous_name,'remember_token'=>$r_token,'avatar_name'=>$userAvatarName);
                    DB::table('users')->insert($data);

                    Session::put('username',$email);

                    Return Redirect('post');
          }else{
            Return Redirect()->back();
          }

        }else{

          $data=array('email'=>$email,'name'=>$name,'password'=>$password,'anonymous_name'=>$anonymous_name,'remember_token'=>$r_token,'avatar_name'=>encrypt('defaultAvatar.png'));
          DB::table('users')->insert($data);
          Session::put('username',$email);
          Return Redirect('post');
        }


  }
  public function checking(Request $req){
    $tmp=$req->u_data;
    $usercheck=DB::table('users')->where(['name'=>$tmp])->orwhere(['anonymous_name'=>$tmp])->first();
    if(count($usercheck)>0){
      echo "fail";
    }else {
      # code...
        echo "success";
    }

  }
  public function emailchecking(Request $req){
    $tmp=$req->u_data;
    $usercheck=DB::table('users')->where(['email'=>$tmp])->first();
    if(count($usercheck)>0){
      echo "fail";
    }else {
      # code...
        echo "success";
    }

  }
}
