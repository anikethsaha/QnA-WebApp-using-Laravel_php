<!DOCTYPE html>
<?php


    $check=DB::table('users')->where(['email'=>Session::get('username')])->first();
    $time=time();
    $scrt="22071998";
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ Session::get('username') }}</title>
    <link href="{{asset('css/skeleton.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css"/>
 <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
       <link rel="stylesheet" href="{{asset('css/design.css')}}" type="text/css">
  </head>
<style media="screen">
*{
  text-transform: capitalize;
}

</style>
  <body>
    @include('header')
    <div class="container">

      <div class="row">
        <div class="four columns" style="border-bottom: 2px solid #f3f3f3;">
          <div class=" row profile-head">


                <div class="u-full-width profile-user-name" style="height:10em;">
                    <h3>{{ $user->name }}</h3>

              </div>
              <div class="u-full-width">
                <div class="profile-image profile-head-image">
                    <a href="#"><img src="../userAvatar/{{ decrypt($user->avatar_name) }}" style="border:2px solid #e7e7e7;"  alt=""></a>
                </div>

              </div>
              <div class="u-full-width"  >


            </div>


        </div>
        </div>
<!--

start of side div -->
<div class="eight columns">

    <div class="u-full-width profile-head-details">
      <div class="container">
        <div class="row">
          <div class="u-full-width">
            <h1>{{$user->email}}</h1>
            <h3><strong>{{ $user->votes }}</strong> Votes</h3>
          </div>
          @if($self == 1)
          <div class="u-full-width setting">
            <a href="/logout">Logout</a>

            <a href="#">Change Password</a>
            <a href="#">Change Anonymous Name</a>
            <br>
            <a href="/message/my">My Message</a>
          </div>
          @elseif($self == 0)
          <div class="u-full-width setting">
              <a href="#" class="chat-o-btn" >Message</a>
          </div>
          @endif
        </div>
      </div>


    </div>
      <div class="u-full-width">
        <div class="profile-body-title">
            <span>question</span>

        </div>
            @foreach($ques as $que)
            <div class="two-column content " style="margin:1em auto;"  >

                  <h3 class="content-title"><a href="/question/{{ $que->title }}">{{ $que->title }}</a></h3>

                  <div >
                    <p>{{ $que->body }}</p>
                    <span><strong style="color:white;">...</strong></span>
                  </div>
                    <span  class="vote vote-display"value="{{ $que->id }}">&#9757; </span>
                  <span class="vote-result" >{{ $que->votes }}</span>
            </div>
            @endforeach
      </div>
      <div class="u-full-width">
        <div class="profile-body-title">
            <span>Answers</span>
        </div>
        @foreach ($answers as $a)
        <?php

          $current_que=App\question::where('id',$a->question_id)->first();

         ?>
        <div class="ans-list-content">
            <h4><a href="/question/{{ $que->title }}">{{ $current_que->title }}</a></h4>
          <span>&#9757;{{ $a->votes }}</span>
          @if($a->approved==1)
           <p class="approved-tag">Approved</p>
          @endif
          <h1>{{$a->title}}</h1>

          <p>{{$a->body}}</p>

        </div>

        @endforeach
      </div>

      </div>
      <!--
end of whole side div
     -->



      </div>

      </div>

      <div class="chat-box">
        <div class="c-box-head">
          <div class="c-head-user">
            <img src="../image/59239205-simple-flat-design-medic-or-doctor-with-surgery-and-stethoscope-outfit-icon-vector-illustration-Stock-Vector.jpg" alt="">
            <span>{{ $user->name }}</span>
          </div>
          <div class="c-box-close">
            <img src="../image/close.png" style="cursor:pointer"  alt="">
          </div>

        </div>

        <div class="c-box-mid" id="mbox">
          @include('message');

          <!-- <div class="msg-body">
            <div class="msg-body-text">
              <span>hieheiehihih</span>

            </div>

            <p>4:07</p>
          </div> -->



        </div>
        <div class="c-box-footer">

          {{ csrf_field() }}
            <input type="text" placeholder="Type Your Message" name="chat_text" value="">
            <input type="hidden" name=<?php $si = md5("sender_id".$time.$scrt); echo $si;?> value="{{encrypt($check->id,$scrt)}}">

            <input type="hidden" name=<?php $se = md5("sender_email".$time.$scrt); echo $se;?>  value="{{encrypt($check->email,$scrt)}}">
            <input type="hidden" name=<?php $sn = md5("sender_name".$time.$scrt); echo $sn?> value="{{encrypt($check->name,$scrt)}}">
            <input type="hidden" name=<?php $ri = md5("reciever_id".$time.$scrt); echo $ri ?> value="{{encrypt($user->id,$scrt)}}">
            <input type="hidden" name=<?php $re = md5("reciever_email".$time.$scrt); echo $re?> value="{{encrypt($user->email,$scrt)}}">
            <input type="hidden" name=<?php $rn = md5("reciever_name".$time.$scrt); echo $rn ?> value="{{encrypt($user->name,$scrt)}}">
            <input type="submit" class="c-box-btn" name="chat_btn" value="">

        </div>
      </div>
    </div>

@include('footer');
    </body>
    <script type="text/javascript">

            setInterval(function () {
                  var d = $('#mbox');
                  d.scrollTop(d.prop("scrollHeight"));
                  // $('.c-box-mid').load(document.URL +  ' #mbox');
                // $('#mbox').scrollTop($('#mbox')[0].scrollHeight);
        }, 500);
    $("input[class='c-box-btn']").click(function(){

      console.log($('input[name="<?php  echo $ri; ?>"]').val());
      var text=$('input[name="chat_text"]').val();
      var sender_id =$('input[name="<?php  echo $si; ?>"]').val();
      var sender_email =$('input[name="<?php  echo $se; ?>"]').val();
      var sender_name =$('input[name="<?php  echo $sn; ?>"]').val();
      var reciever_id =$('input[name="<?php  echo $ri; ?>"]').val();
      var reciever_email =$('input[name="<?php  echo $re; ?>"]').val();
      var reciever_name=$('input[name="<?php  echo $rn; ?>"]').val();
      $.ajax({
        url:"/s/message",
        dataType:"text",
        type:"post",
        headers:{
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{sender_id:sender_id,
          sender_email:sender_email,
          sender_name:sender_name,
          reciever_id:reciever_id,
          reciever_email:reciever_email,
          reciever_name:reciever_name,
          text:text},
          success:function(d){
            console.log(d);
              $('.c-box-mid').load(document.URL +  ' #mbox');
            $('#mbox').scrollTop($('#mbox')[0].scrollHeight);
          }
      });



      $('input[name="chat_text"]').val(' ');

    });




      $('.chat-o-btn').click(function(){
        $('.chat-box').show(100);
      });
      $('.c-box-close img').click(function(){

          $('.chat-box').hide('fast');
      });
    </script>
</html>
