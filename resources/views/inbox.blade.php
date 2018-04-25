<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Message</title>
    <link href="{{asset('css/skeleton.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css"/>
 <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
       <link rel="stylesheet" href="{{asset('css/design.css')}}" type="text/css">
  </head>
  <style media="screen">

  </style>
  <body>
    <div class="container">
      <div class="m-container">
          <div class="inbox">
            <div class="inbox-head row">
              <div class="inbox-close">
                <div class="">
                    <a href="/profile/my"><img src="../image/left-arrow.png" alt=""></a>
                </div>

              </div>
                <div class="two columns  " style="margin-left:0;">
                      <div class="inbox-user-face">
                        <img src="../image/59239205-simple-flat-design-medic-or-doctor-with-surgery-and-stethoscope-outfit-icon-vector-illustration-Stock-Vector.jpg" alt="">

                      </div>

                  </div>
                  <div class="nine columns" style="margin-left:0;">
                      <h1 style="margin: auto;margin-top: .4em;">{{ Session::get('username') }}</h1>
                  </div>

            </div>
            <div class="inbox-mid">


<!-- foreach from here -->

@foreach($msgs as $m)
              <div class="in-mid-content">
                <div class="in-chat row">

                  <div class="two columns">
                    <div class="in-chat-user-face" >
                      <img style="width:100%;" src="../image/59239205-simple-flat-design-medic-or-doctor-with-surgery-and-stethoscope-outfit-icon-vector-illustration-Stock-Vector.jpg" alt="">
                    </div>
                  </div>

                  <div class="eight columns  ">
                    <div class="in-chat-main ">
                      <div class="in-user-name">
                        @if($m->sender_email == Session::get('username'))
                        <?php
                          $rus=str_replace(' ', '%20', $m->reciever_name);
                         ?>
                            <span style="color:black;"><strong>Me </strong><i>Sent to</i> <a style="text-decoration:none;" href="/user/{{ $rus }}"> {{ $m->reciever_name }}</a></span>
                        @else
                        <?php
                          $us=str_replace(' ', '%20', $m->sender_name);

                           ?>
                        <a style="text-decoration:none;" href="/user/{{ $us }}"><span style="color:#1EAEDB;">{{ $m->sender_name }}</span></a>
                        @endif
                      </div>
                      <div class="in-text">
                        <p>{{decrypt($m->text)}}</p>
                      </div>
                    </div>
                  </div>

                  <div class="two columns">
                    <div class="in-chat-time">
                      <span>{{ $m->created_at }}</span>
                    </div>
                  </div>


                </div>
              </div>
@endforeach
              <!-- foreach end heree  -->





            </div>
          </div>
      </div>
    </div>
  </body>
</html>
