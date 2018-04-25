<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chat;
use Session;
class ChatController extends Controller
{
    //
    public function secr($para){
            $para=  trim($para);
            $para=  strip_tags($para);
            $para=  stripslashes($para);
            $para=  htmlspecialchars($para);
    return $para;
}

    public function send(Request $req){
      $time=time();
      $scrt='22071998';
      $sender_id =decrypt($req->sender_id,$scrt);
      $sender_email =decrypt($req->sender_email,$scrt);
      $sender_name =decrypt($req->sender_name,$scrt);
      $reciever_id =decrypt($req->reciever_id,$scrt);
      $reciever_email =decrypt($req->reciever_email,$scrt);
      $reciever_name=decrypt($req->reciever_name,$scrt);
      $text=$this->secr($req->text);
      $text=encrypt($text);


      $chat = chat::insert(['reciever_id'=>$reciever_id,'reciever_email'=>$reciever_email,'reciever_name'=>$reciever_name,'sender_id'=>$sender_id,'sender_email'=>$sender_email,'sender_name'=>$sender_name,'text'=>$text]);

      // $chat = new chat;
      // $chat->reciever_id = $reciever_id;
      // $chat->reciever_name = $reciever_name;
      // $chat->reciever_email = $reciever_email;
      // $chat->sender_id = $sender_id;
      // $chat->sender_email = $sender_email;
      // $chat->sender_name = $sender_name;
      // $chat->text = $text;
      // $chat->create_at = time();
      // $chat->save();
      if($chat){
        echo "string";
    }
    }
    public function inbox(){
      if (Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')) {
        $msgs=chat::where('sender_email',Session::get('username'))
                  ->orwhere('reciever_email',Session::get('username'))
                  ->get();
        return view('inbox')->with('msgs',$msgs);
      }else {
        # code...
          return redirect('/user');
      }

    }

}
