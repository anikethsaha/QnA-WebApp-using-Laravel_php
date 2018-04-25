<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $p->title }}</title>
    <link href="{{asset('css/skeleton.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
       <link rel="stylesheet" href="{{asset('css/design.css')}}" type="text/css">
     <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <style media="screen">

  </style>
  <body>
    @include('header')
    <div class="content-story-image">
        <img src="../image/medicine-flat-design_1212-670.jpg" alt="">
    </div>
    <div class="full-width" style="">
      <div class="" style="max-width: 960px;  margin: 0 auto;width: 80%;">
        <div class="inner-story">
          <div class="story-title">
            <h1 class="post-title">{{ $p->title }}</h1>
          </div>


          <div class="row">
            <div class="eight columns">
              <div class="content-story">
                  <p style="font-size: 1.5em!important">{{ $p->body }}</p>
                  <p style="float:right;">A U T H O R &#x26A1; &#8594; {{ $p->name }}</p>
              </div>

            </div>
              @include('sidebar');
        </div>



        </div>

      </div>
    </div>

@include('footer');
  </body>
</html>
