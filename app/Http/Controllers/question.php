<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use Session;
class question extends Controller
{
    //
      private $limit=9;
      private $offset=0;
    public function secr($para){
            $para=trim($para);
            $para=  strip_tags($para);
            $para=  stripslashes($para);
            $para=  htmlspecialchars($para);
    return $para;
}

    public function create(Request $req){

        $title=filter_var($req->input('title'),FILTER_SANITIZE_STRING);
        $body=filter_var($req->input('body'),FILTER_SANITIZE_STRING);
        $title=$this->secr($title);
        $body=$this->secr($body);
        $anon_check = DB::table('users')->where('email',Session::get('username'))->first();
        if($anon_check->anonymous_name == decrypt($req->input('user_name'))){
          $anon=1;
        }else{
          $anon=0;
        }
          $qury=DB::insert('insert into questions (user_id,user_email, user_name,title,body,is_anonymous) values (?,?,?,?,?,?)', [decrypt($req->input('user_id')),decrypt($req->input('user_email')),decrypt($req->input('user_name')),$title,$body,$anon ]);
          if($qury){
              Return Redirect('/post')->with('message',"Succes in Submitting the question");
          }else {
              Return Redirect('/post')->with('message',"Failed in Submitting the QUESTION please try again");
          }
        }

        public function home_page(){
          $postdetails=App\Post::orderBy('id', 'desc')->get();

          $questions=App\question::orderBy('id','asec')->limit($this->limit)->get();

          Return view('post')->with('postdetails',$postdetails)->with('questions',$questions);



        }
        public function loadmore_home(Request $req){
              $this->offset=$req->input('count');




           $posts = App\question::orderBy('id','DESC')->offset($this->offset)->limit($this->limit)->get();
           $output="";

            foreach($posts as $q)
            {
              if($q->is_anonymous == 1){
                $url="#";
                $type="Anonymous";
                $avatar = "anonymousAvatar.jpg";
              }else{
                $user=DB::table('users')->where(['email'=>$q->user_email])->first();
                $avatar = decrypt($user->avatar_name);
                $url=htmlentities('/user/'.$q->user_name.'');
                  $url=str_replace(' ', '%20', $url);
                $url=$url;
                $type="User";
              }
               $output.='<div id="target">



               <div class="two-column content "  >
                     <div class="content-user">
                       <div class="user-face">
                       <img style="width:100%;height:100%;border-radius: 100%;" src="userAvatar/'.$avatar.'" alt="">

                       </div>
                       <div class="user-name">
                         <a href='.$url.'> '.$q->user_name.' </a>
                          <p><i style="color:#f3f3f3;" >'.$type.'</i></p>
                       </div>
                     </div>
                     <h3 class="content-title"><a href="/question/' .$q->title. '"> '.$q->title.' </a></h3>

                     <div >
                       <p> '.$q->body.' </p>
                       <span><strong style="color:white;">...</strong></span>
                     </div>
                       <span  class="vote vote-display " onclick="votenowque('.$q->id.')" value="'.$q->id.' ">&#9757; </span>
                     <span class="vote-result" >'.$q->votes.'</span>
               </div>



             </div>';
           }

           echo $output;


        }

    }
