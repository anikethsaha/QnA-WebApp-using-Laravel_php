<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search | {{ $title }}</title>
    <link href="{{asset('css/skeleton.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
       <link rel="stylesheet" href="{{asset('css/design.css')}}" type="text/css">
  </head>
  <body>
    @include('header')
    <div class="container">
      <div class="row">
        <div class="eight columns">
            <h1><strong>{{ count($questions) }} - </strong>Question Related to  <strong>{{ $title }}</strong></h1>
            @if(! empty($questions))
            @foreach ($questions as $q)
            <div class="two-column content "  >
                  <div class="content-user">
                    <div class="user-face">

                    </div>
                    <div class="user-name">
                      <a href="#">{{ $q->user_name }}</a>
                      <p><i style="color:#f3f3f3;" >User</i></p>
                    </div>
                  </div>
                  <h3 class="content-title"><a href="/question/{{ $q->id }}">{{ $q->title }}</a></h3>

                  <div >
                    <p>{{ $q->body }}</p>
                    <span><strong style="color:white;">...</strong></span>
                  </div>
                    <span  class="vote vote-display"value="{{ $q->id }}">&#9757; </span>
                  <span class="vote-result" >{{ $q->votes }}</span>
            </div>
            @endforeach
            @endif
        </div>
        <div class="four columns">
          <h1><strong>{{ count($posts)  }} - </strong>  Posts Related to <strong>{{ $title }}</strong></h1>

          @if(! empty($posts))
          @foreach ($posts as $a)
          <div class="content">

                <a href="/post/{{ $a->id }}" style="text-decoration:none;"><h6 class="content-title" style="font-size:1.4em;"> {{ $a->title }} </h6></a>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>
    @include('footer');
  </body>
</html>
