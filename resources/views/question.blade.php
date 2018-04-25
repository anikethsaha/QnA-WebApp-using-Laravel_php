<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Question</title>
    <link href="{{asset('css/skeleton.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
       <link rel="stylesheet" href="{{asset('css/design.css')}}" type="text/css">
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js "></script>
  </head>
  <style media="screen">

  </style>
  <body>
    @include('header')
    <div class="container">

        <div class="row">
            <div class="ten columns">
                <div class="question-content">
                  <div class="row">
                    <div class="two columns vote-show" >

                      <h4>  <span>&#9757;</span> :  {{ $question->votes }}</h4>
                    </div>
                    <div class="ten columns">
                      <div class="que-content-title">
                            <h3>{{ $question->title }}</h3>
                      </div>
                      <div class="que-content-body">
                          <p>{{ $question->body }}</p>
                      </div>
                    </div>
                      <div class="ans-div columns ">
                        <h3 style="  text-align: center;">Answer</h3>

                      @if(Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username'))
                            <?php
                            $username=Session::get('username');
                            $user=DB::table('users')->where(['email'=>$username])->first();



                             ?>
                          <div class="ans-form">
                            <h3 > <span><strong>&rarr;</strong></span>{{ $user->name }}</h3>
                            <form class="" action="/answer/{{ $question->id }}/post" method="post">

                              <label for="">Title</label>
                              <input type="text"  required name="title" value="">
                              <label for="">body</label>
                              <?php
                              $helper_user_email = 'helper_user_email';
                               ?>
                              <input type="hidden" name="{{ $helper_user_email}}" value= {{ encrypt($user->email)  }}>
                                <input type="hidden" name="helper_user_id" value= {{  encrypt($user->id)  }}>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="question_id" value="{{ encrypt($question->id)  }}">
                              <textarea name="body" required rows="8" cols="80"></textarea>
                              <input type="hidden"  required name="helper_user_name" style="width:5%;" value="{{ encrypt($user->name) }}"> Your Original User Name<br>
                              <button type="submit"  name="button">Post Answer</button>
                            </form>
                          </div>
                          @else
                            <h3 style="color: #f009;
text-align: center;
text-transform: full-width;
letter-spacing: 0px;">You Need to Login to Answer this question</h3>
                      @endif
                      <div class="ans-list">
                        <?php
                        $answers=App\answer::where('question_id',$question->id)->get();
                        $coun=count($answers);
                         ?>
                         <div class="">
                           <h3>{{ $coun }} : Answers</h3>
                         </div>

                           @foreach($answers as $a)

                           <div class="ans-list-content">
                             <div class="content-user">
                               <div class="user-face">

                               </div>
                               <div class="user-name">
                                 <a href="#">{{ $a->helper_user_name }}</a>
                                 <p><i>user</i></p>
                               </div>
                             </div>
                             <span>&#9757;{{ $a->votes }}</span>
                             @if($a->approved==1)
                              <p class="approved-tag">Approved</p>
                             @endif
                             <h1>{{$a->title}}</h1>

                             <p>{{$a->body}}</p>
                             <p style="    text-align: right;">Answered By &#x26A1; &rarr; <a href="#">{{ $a->helper_user_name }}</a></p>
                           </div>

                           @endforeach
                         </div>



                      </div>

                  </div>

                </div>
            </div>
        </div>
    </div>
    @include('footer');
  </body>
</html>
