<!DOCTYPE html>
<?php
$check=DB::table('users')->where(['email'=>Session::get('username')])->first();
 $time=time();
  $scrt="22071998";
   ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>WriteArticle</title>
    <link href="{{asset('css/skeleton.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
       <link rel="stylesheet" href="{{asset('css/design.css')}}" type="text/css">
     <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <style media="screen">
    body{
      background-color: #f0f0f5;
    }
  </style>
  <body>
      @include('header')
      <div class="full-width article-head">
        <div class="container">
            <h1>hello world</h1>
            <h3>Live chat sessions with top developer influencers and tech teams</h3>
        </div>

      </div>
      <div class="container">
        <div class="container" id="write-board" style="padding:1em;">
              <div class="article-board" >
              
                <form action="/post/create" method="post" enctype="multipart/form-data">

                  {{ csrf_field() }}
                  <input type="hidden" name="_aoe" value="{{ encrypt(Session::get('username')) }}">
                    <input type="hidden" name="_aon" value="{{ encrypt($check->name) }}">
                  <label for="title" class="u-full-width">TITLE</label>
                  <input type="text"  class="u-full-width" id="title" name="title" >
                  <label for="" class="u-full-width">Upload the image which relates the article</label>
                  <input type="file" class="u-full-width" name="story-image" value="">
                  <label for="body" class="u-full-width">BODY</label>
                  <textarea type="text" class="u-full-width" style="border:1px solid #D1D1D1;" id="body" name="body" >
                  </textarea>

                  <input type="submit" class="u-full-width" name="btn_post" value="submit">
                </form>

              </div>

      </div>
      </div>
@include('footer');
  </body>
</html>
