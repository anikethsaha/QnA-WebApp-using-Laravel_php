<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>post</title>
      <link href="css/skeleton.css" rel="stylesheet" type="text/css"/>
      <link href="css/design.css" rel="stylesheet" type="text/css"/>
      <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
      <!-- <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
       <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script> -->
       <script src="js/jquery.js" type="text/javascript"></script>
       <script src="js/index.js" type="text/javascript"></script>
       <meta name="csrf-token" content="{{ csrf_token() }}">
       <link rel="stylesheet" href="/css/toastr.min.css">
       <script src="/js/toastr.min.js" charset="utf-8"></script>

       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
       <script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
  </head>
<style media="screen">
.slider-container{
height: 100%;
width: 100%;
position: relative;
overflow: hidden;
text-align: center;
}

.sl-menu {
position: absolute;
left: 0;
z-index: 9;
width: 100%;
bottom: 0;
}

.sl-menu label {
cursor: pointer;
display: inline-block;
width: 16px;
height: 16px;
background: #fff;
border-radius: 50px;
margin: 0 .2em 1em;
}
.sl-menu label:hover {
  background: red;
}


.slide {
width: 100%;
height: 100%;
position: absolute;
top: 0;
left: 100%;
z-index: 10;
padding: 8em 1em 0;
background-size: cover;
background-position: 50% 50%;
transition: left 0s .75s;
}

[id^="slide"]:checked + .slide {
left: 0;
z-index: 1;
transition: left .65s ease-out;
}

.slide-1 {
background-image: url("https://source.unsplash.com/t7YycgAoVSw/1600x900");
}
.slide-2 {
background-image: url("https://source.unsplash.com/11H1SSVcIxc/1600x900");
}
.slide-3 {
background-image: url("https://source.unsplash.com/OlZ1nWLEEgM/1600x900");
}
.loadmore-btn-div{
  text-align: center;
    background-color: white;
    color: #024b68;
    width: 70%;
    margin: auto;
    text-transform: uppercase;
    font-size: 1.7em;
    letter-spacing: 2px;
        padding-top: 0.2em;

}
.loadmore-btn-div:hover{
    box-shadow: 0px 1px 6px 0px rgba(00,0,00,0.3);
}
.loadmore-btn-div h3{
  cursor: pointer;
}
.loadmore-btn-div img{
  display: none;
  margin: auto;
    width: 2em;
    height: 2em;
}
  @media(max-width:480px){
    .slider-container{
      z-index: -1;
    }
  }

</style>
  <body >
@include('header')
<div class="" style="background: #171a29;">


<div class="container">
  @if(Session::has('message'))
    <script type="text/javascript">
      var mes="{{Session::get('message')}}";
        alert(mes);
    </script>

  @endif

<div class="row image-slider" style="padding:3em 0;">
  <div class="slider-container six columns">
    <div class="sl-menu">
      <label for="slide-dot-1"></label>
      <label for="slide-dot-2"></label>
      <label for="slide-dot-3"></label>
    </div>

    <input id="slide-dot-1" type="radio" name="slides" checked>
      <div class="slide slide-1"></div>

    <input id="slide-dot-2" type="radio" name="slides">
      <div class="slide slide-2"></div>

    <input id="slide-dot-3" type="radio" name="slides">
      <div class="slide slide-3"></div>
  </div>
  <div class="five columns">
    <h1 style="    color: white;
    font-size: 3em;
    text-align: start;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-top: auto;">The good physician treats the disease;<br/> the great physician treats the <br/> patient who has the disease.</h1>,
  </div>
  <!-- <img style="" src="image/mayank-kumar-memories-of-central-perk-flat-design.jpg" alt=""> -->
</div>
</div>
</div>
<script type="text/javascript">


  </script>


<div class="">
  <div class="container">
    <div class="content-middle">

      <h1 class="heading">TOP POSTs
      </h1>
      <div class="our-mission" id="team">
         <div id="ca-container" class="ca-container">
          <div class="ca-wrapper">
            <!-- add php loop from herer -->
            @foreach($postdetails as $p)
                 <div class="ca-item ca-item-1">
               <div class="ca-item-main" style="border:1px solid #e7e7e7;">
                <div class="ca-icon"> </div>
                <h3><a href="/post/{{ $p->title }}">{{$p->title}}</a></h3>
                 <h4 >
                   <div class="">
                     <p  >{{$p->body  }}</p><span><strong>...</strong></span>
                   </div>
                </h4>
              </div>
              </div>
              @endforeach

            <!-- // end loop here -->
          </div>
       </div>
            <script type="text/javascript">
            $('#ca-container').contentcarousel();
          </script>
    </div>
    </div><br>
  </div>
</div>



<div class="container">
<div class="row">
 <!-- <div class="container">
   <h1>ihihi</h1>
 </div> -->

        <div class="eight columns">


                    <h1 class="heading">Question


                       {{ session()->get('name') }}</h1>

                  <div id="target">

                    @if(! empty($questions))
                    @foreach ($questions as $q)

                        @if($q->is_anonymous == 1)
                          <?php
                          $url="#";
                          $type="Anonymous";
                          $avatar = "anonymousAvatar.jpg";
                           ?>
                        @else
                        <?php
                          $user = DB::table('users')->where(['email'=>$q->user_email])->first();
                          $avatar =decrypt($user->avatar_name);
                        $us=str_replace(' ', '%20', $q->user_name);
                        $url="/user/$us";
                        $type="User";
                         ?>

                        @endif
                    <div class="two-column content "  >
                          <div class="content-user">
                            <div class="user-face">

                                  <img style="width:100%;height:100%;border-radius: 100%;" src="userAvatar/{{ $avatar}}" alt="">

                            </div>
                            <div class="user-name">
                              <a href={{$url}}>{{ $q->user_name }}</a>
                              <p><i style="color:#f3f3f3;" >{{$type}}</i></p>
                            </div>
                          </div>
                          <h3 class="content-title"><a href="/question/{{ $q->title }}">{{ $q->title }}</a></h3>

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
<div class="loadmore-btn-div">
      <h3 id="loadmore-btn" onclick="loadmore()" >loadmore</h3>
    <img src="image/830.gif" id="loadmore-scroller" alt="loading...">
</div>

        </div>
@include('sidebar');

</div>
</div>
<section class="feature-tag">

    <div class="container" style="border-top: 1.4px solid rgba(0,0,0,.3); ">
      <h1>FEATURES</h1>
      <div class="row">
        <div class="four columns feature">
          <div class="feature-image" style="background-image:url('../image/diagnosis_prescription_report_doctor_consultation_document_medical_conclusion_flat_design_icon-512.png')">

          </div>
            <h1>this is one</h1>
            <p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!</p>
        </div>
        <div class="four columns feature">
          <div class="feature-image" style="background-image:url('../image/firewall.png')">

          </div>
          <h1>this is one</h1>
          <p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!</p>
        </div>
        <div class="four columns feature">
          <div class="feature-image" style="background-image:url('../image/question.png')">

          </div>
          <h1>this is one</h1>
          <p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!</p>
        </div>
      </div>
    </div>


</section>

@include('footer');
  </body>
  <script type="text/javascript">

  function notify(msg){
    toastr.success(msg,'',{
      progressBar : true,
      closeMethod :'slideUp'
    });
  }


@if(Session::has('msg'))

  notify("{{ Session::get('msg')  }}");
@endif
@if(Session::has('error_msg'))
toastr.error("{{ Session::get('error_msg')  }}",'',{
  progressBar : true,
  closeMethod :'slideUp'
});
@endif

    function postform(){

      $('#write-board').slideToggle();
    }
    $('.vote-display').on('click',function(){
      votenowque($(this).attr("value"));
        });

    function votenowque(x){
      console.log(x);


      $.ajax({
        url:"/vote",
        type:"post",
        dataType:"text",

        headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
       data:{id: x , _token:$('meta[name="csrf-token"]').attr('content')},
        success:function(da){
          notify(da);
        }

        });
    }
    var count=0;
    function loadmore(){
      count+=5;
      console.log("count:"+count);

      //  var id = $(this).data('id');
      $('#loadmore_btn').html("loading..");
      $('#loadmore-btn').hide();
      $('#loadmore-scroller').show();
      $.ajax({
        url:"/post",
        type:"post",
        dataType:"text",

        headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
       data:{count:count, _token:$('meta[name="csrf-token"]').attr('content')},
        success:function(data){

            $('#target').append(data);
            $('#loadmore_btn').html("loadmore");
            $('#loadmore-btn').show();
            $('#loadmore-scroller').hide()
        }
        });
    }
  </script>
</html>
