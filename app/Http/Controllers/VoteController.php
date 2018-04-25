<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\vote;
use App;

class VoteController extends Controller
{
    //
    public function quevote(Request $req){
      if (Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')) {
        # code..
        $qury=App\question::where(['user_email'=>Session::get('username'),'id'=>$req->id])->first();
        if (count($qury)>0) {
          # code...
          echo "Same USer";
        }
        else
          {

        # code...

            $vote_question_id=$req->id;               //question id
            $vote_type="question";


           $voter_username=Session::get('username');               // email of the voter i.e who is going to vote
           $user=DB::table('users')->where(['email'=>$voter_username])->first();       // find the user who is voting
           $voter_user_id=$user->id;              //his/her id
           $voter_user_email=$user->email;         //his/her name
           $count=App\vote::where(['question_id'=>$vote_question_id],['user_id'=>$voter_user_id])->first(); //checking for the multiple votes from same voter
           if(count($count)>0){
             echo "Cant vote twice for same question";
            }
            else
              {

            //get the detail of the user whom this question belongs
                $asked_user = App\question::where(['id'=>$vote_question_id])->first();
               $reciever_user_id = $asked_user->user_id;
               $reciever_user_name = $asked_user->user_name;
               $reciever_user_email = $asked_user->user_email;
           //update user table
               $up_user=DB::table('users')
               ->where(['email'=>$reciever_user_email])              //give a vote to the user to whom the question belongs
               ->Increment('votes');
            //update the question table
                $up_ques=App\question::find($vote_question_id) ->increment('votes');    // gis a vote to the question

            //update vote table
            // add this voting to the vote table
                $vote= new vote;
                $vote->question_id = $vote_question_id;
                $vote->vote_type = $vote_type;
                $vote->voter_id = $voter_user_id;
                $vote->voter_email = $voter_user_email;
                $vote->voter_name = $voter_username;
                $vote->reciever_id = $reciever_user_id;
                $vote->reciever_name = $reciever_user_name;
                $vote->reciever_email = $reciever_user_email;
                $vote->save();
                echo "done";
              }
            }

      }
      else
      {
        echo "You need to login";
      }




      //  echo "succcccccccccess";
      }







}
