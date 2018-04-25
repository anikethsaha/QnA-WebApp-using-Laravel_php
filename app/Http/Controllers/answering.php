<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\answer;
class answering extends Controller
{
    //
    public function secr($para){
            $para=  trim($para);
            $para=  strip_tags($para);
            $para=  stripslashes($para);
            $para=  htmlspecialchars($para);
    return $para;
}
    public function create_ans(Request $req,$id){
      $title = $req->title;
      $body = $req->body;
      
      $question_id = decrypt($req->question_id);
      $user_id = decrypt($req->helper_user_id);
      $user_email = decrypt($req->helper_user_email);
      $user_name = decrypt($req->helper_user_name);

      $title = $this->secr($title);
      $body = $this->secr($body);
      $question_id = $this->secr($question_id);
      $user_id = $this->secr($user_id);
      $user_email = $this->secr($user_email);
      $user_name = $this->secr($user_name);

      $title=filter_var($title,FILTER_SANITIZE_STRING);
      $body=filter_var($body,FILTER_SANITIZE_STRING);
      $user_email=filter_var($user_email,FILTER_SANITIZE_EMAIL);

      $answer = new answer;
      $answer->title = $title;
      $answer->body = $body;
      $answer->question_id = $question_id;
      $answer->helper_user_id = $user_id;
      $answer->helper_user_name = $user_name;
      $answer->helper_user_email = $user_email;
      $answer->save();
      Return redirect()->back();
    }
}
