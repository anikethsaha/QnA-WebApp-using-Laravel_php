<style media="screen">
  .m-menu{
    color: white;
margin: 0;
padding: .5em;
border: 0;

  }
  a{
    text-decoration: none;
  }
  div.burger {
  display: none;
	height: 30px;
	width: 40px;
	position: absolute;
	top: 11px;
	left: 21px;
	cursor: pointer;
}
	div.x,
	div.y,
	div.z {

		position: absolute; margin: auto;
		top: 0px; bottom: 0px;
		background: #fff;
		border-radius:2px;
		-webkit-transition: all 200ms ease-out;
		   -moz-transition: all 200ms ease-out;
		    -ms-transition: all 200ms ease-out;
		     -o-transition: all 200ms ease-out;
		        transition: all 200ms ease-out;
	}
	div.x, div.y, div.z { height: 3px; width: 26px; background: #4fbcc6;}
	div.y{top: 18px;}
	div.z{top: 37px;}
	div.collapse{
		top: 20px;
		background:#4a89dc;
		-webkit-transition: all 70ms ease-out;
		   -moz-transition: all 70ms ease-out;
		    -ms-transition: all 70ms ease-out;
		     -o-transition: all 70ms ease-out;
		        transition: all 70ms ease-out;
	}


	div.rotate30{
		-ms-transform: rotate(30deg);
    	-webkit-transform: rotate(30deg);
	    transform: rotate(30deg);
		-webkit-transition: all 50ms ease-out;
		   -moz-transition: all 50ms ease-out;
		    -ms-transition: all 50ms ease-out;
		     -o-transition: all 50ms ease-out;
		        transition: all 50ms ease-out;
	}
	div.rotate150{
		-ms-transform: rotate(150deg);
    	-webkit-transform: rotate(150deg);
	    transform: rotate(150deg);
		-webkit-transition: all 50ms ease-out;
		   -moz-transition: all 50ms ease-out;
		    -ms-transition: all 50ms ease-out;
		     -o-transition: all 50ms ease-out;
		        transition: all 50ms ease-out;
	}

	div.rotate45{
		-ms-transform: rotate(45deg);
    	-webkit-transform: rotate(45deg);
	    transform: rotate(45deg);
		-webkit-transition: all 100ms ease-out;
		   -moz-transition: all 100ms ease-out;
		    -ms-transition: all 100ms ease-out;
		     -o-transition: all 100ms ease-out;
		        transition: all 100ms ease-out;
	}
	div.rotate135{
		-ms-transform: rotate(135deg);
    	-webkit-transform: rotate(135deg);
	    transform: rotate(135deg);
		-webkit-transition: all 100ms ease-out;
		   -moz-transition: all 100ms ease-out;
		    -ms-transition: all 100ms ease-out;
		     -o-transition: all 100ms ease-out;
		        transition: all 100ms ease-out;
	}
  div.circle{
	border-radius: 50%;
	width: 0px;
	height: 0px;
	position:absolute;
	top: 35px;
	left: 36px;
	background:#fff;
	opacity:1;
  z-index: 99;
	-webkit-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	   -moz-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	    -ms-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	     -o-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	        transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
div.circle.expand{
	width:1200px;
	height:1200px;
	top: -560px;
	left: -565px;
	-webkit-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	   -moz-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	    -ms-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	     -o-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	        transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);

}
div.menu {
	height: 568px;
	width: 320px;
	position: absolute;
	top: 0px; left: 0px;
  display: none;
}
div.menu ul li {
	list-style: none;
	position:absolute;
	top:50px;;
	left:0;
	opacity:0;
	width:320px;
	text-align:center;
	font-size:0px;
	-webkit-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	   -moz-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	    -ms-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	     -o-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	        transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
div.menu ul li a {
	color:#4a89dc;
	text-transform:uppercase;
	text-decoration:none;
	letter-spacing:3px;
}

div.menu li.animate{
	font-size:21px;
	opacity:1;
	-webkit-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	   -moz-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	    -ms-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	     -o-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	        transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
div.menu li.animate:nth-of-type(1){
	top:120px;
	transition-delay: 0.0s;
}
div.menu li.animate:nth-of-type(2){
	top:190px;
	transition-delay: 0.03s;

}
div.menu li.animate:nth-of-type(3){
	top:260px;
	transition-delay: 0.06s;

}
div.menu li.animate:nth-of-type(4){
	top:330px;
	transition-delay: 0.09s;

}
div.menu li.animate:nth-of-type(5){
	top:400px;
	transition-delay: 0.12s;

}
div.menu li.animate:nth-of-type(6){
	top:470px;
	transition-delay: 0.15s;

}
  @media(max-width:480px){
    div.burger{
      display: block;
    }
    .search-result{
      display: none;
    }
    .nav-bar{
      padding: 1em 30% 1em 1em;
    }
    .title{

    color: #4fbcc6;
    float: right;
    font-size: 2.5em;
    border-bottom: 5px solid white;
    border-top: 5px solid #f7b632;
    margin: 0 ;
    }
    .ico , .write-post-btn{
      display: none;
    }
    .circle,.menu,.burger{
      z-index: 99;
    }
    .ask-que-space{
      width: 90%;
    }
  }

.ask-que-pp{
  width: 100%;
  height: 100%;
  position: absolute;
  visibility: hidden;
z-index: 101;

}
.ask-que-pp.go{
  visibility: visible;

}

.ask-que-form{

}
.pp-space{
  width: 100%;
  height: 100%;
  opacity: 0.8;
  position: absolute;
  background-color: black;
}
.ask-que-space{
  background-color: white;
padding-bottom: 36px;
position: relative;

min-height: 540px;
width: 70%;
 height: 78%;
margin: auto;
}
.ask-que-space h1{
  padding: 1em;
  text-align: center;
}
.ask-que-form form input,textarea{
  width: 100%;
/* padding: 2em; */

border: 2px solid;
border-radius: 0;
}
.ask-que-form form button{
  border: 2px solid;
  border-radius: 0;
  background-color: #024b68;
color: white;
text-transform: uppercase;
}
.ask-que-form form input,textarea,label,button{
  margin-top: 1em;
}
.ask-que-space h3{
  font-size: 26px;

position: absolute;
top: 14px;
right: 14px;

}
.m-search-btn{

  height: 100%;
  width: 4em;
  margin-top: -2em;
  position: absolute;
  top: 50%;
  right: 0.5rem;

  opacity: 0.2;
  background-color: transparent;
  border: 0;
  background-repeat: no-repeat;
  background-size: 100%;
  background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAQAAAAAYLlVAAACnElEQVR4AcXZsUsbYRjH8e+dh2s1SyAGJwMJuDj1BIcEhJQIOnTq5F+QOf0jIq79A7oFh7aYyVBEkaZDC3awECc1AUXRIqUQotfFocnjJe/dk+b9PKP65Md7z13ee3Uwk2SNHKmngs5TnbDLJQqjA+RYZ4OXuDzvkSYf+cAJ44fPAYFhHeAzVhlqBBGrRoax8KjSJYhRXap4KCVoECiqQQKFLC0CZbXIElOBOwJ9cUchzm2Y5QsveN4tdfY4o00HSDHHPKuUmOV5v/D5SSSJ0MXfIY+HBB55dkIvRIIIvJDR28dnFJ/9kHH0MFaVDehRxlSZnuxAFUMZunKQKBJFUQ4wXTIYqcmPZ5GoFmUEahjw5eJTJI6ivBD4jCS/csrEVZZfU4yQk5OPhrwjcoRygQ0GVdCQf73OUEfisaMkHk1HDJHkYeDX82jlBzo+kCSEyxruwDP/EK1DbsWnhHDFgNTpodWjLgY9NECKfnvoyS4p8wBngN5Z/ABtQK8dP0AH0OuYB5iMqfAAMque7HJtHmAOPdnlxjzAPHqyy5V5gFX0ZJfj8AAn9CvhoeVRol8zPMAuj/xrlhW0Vpg1D3ApflhGR3b4wTlDvI24i4u+w9y0uyVrM213U1qxuy2/Z8bui8m23VezgGW7L6cBLdIWXs9FBAsHFCLCJI9opFMKXEzkkEp/IbK0bEdI0LARQRzVWoigPKy+Z5tlWooIiuP6NhVmAEiPNwLkqHDEw5CGx2wyDQDRI8T7l80U19xwxTFNmpwzKM1nFsyeCw7jFymCAxYjrHDp8r9cUOCUYRZ4Bw6AxVV47QJYXIVXLliNsOSC1Qh/XLAa4ZuDmmIcH1l2AaytwhZfmaAkn/qOb7eYBofJekOJJX7znfccAvwFyB3OeNys7d4AAAAASUVORK5CYII=');

}
.noti{
  position: absolute;
top: 6em;
max-height: 362px;
min-height: 100px;
overflow-y: auto;
overflow-x: hidden;
padding: 0;
background: #fff;
border: solid 1px #e6e6e6;
border-radius: 3px;
-webkit-box-shadow: 0 0 5px rgba(0,0,0,.0975);
box-shadow: 0 0 5px rgba(0,0,0,.0975);
display: none;
white-space: normal;
width: 500px;
z-index: 11;
right: 10em;
}
.noti ul li{
  -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    min-height: 40px;
    padding: 12px 16px 13px;
    position: relative;
    margin-bottom: auto;
}
.noti.s{
  display: block;
}
.unread-noti{
  background-color: #edf2fa;
}
.noti header{
  background: #fff;
box-shadow: 0 2px 4px 0 rgba(0,0,0,.1);
-webkit-animation: _106QO .3s ease-out;
animation: _106QO .3s ease-out;
padding: 1em;
}
.noti header span{
  color: #90949c;
font-family: Helvetica, Arial, sans-serif;
font-size: 1.4em;
font-weight: 500;
padding: 5px 12px;
}
</style>
<style media="screen">
@media(max-width:580px){
.noti{
  width: 100%;
z-index: 11;
right: 0;
}
}
</style>
<!-- pop-up for ask question -->
 <?php if(Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')): ?>
<?php
     $user=DB::table('users')->where('email', Session::get('username'))->first();


 ?>

  <div class="ask-que-pp">
    <div class="pp-space">

    </div>
    <div class="ask-que-space">
        <h3 onclick="removego()" id="pp-close" style="cursor:pointer;">&#10005</h3>
      <div class="container">
        <h1><strong>Explain your Health Problem </strong></h1>


        <div class="ask-que-form">
              <form class="" action="/submit/ask/question" method="post">
                <label for="">Please write a short title to your problem</label>
                  <input type="text" required name="title" >
                   <?php echo e(csrf_field()); ?>

                <label for="">Explain your problem in detail</label>
                  <textarea  required name="body" rows="8" cols="80"></textarea>
                  <label for="">Which name you want to Use for The question</label>
                  <input type="hidden" name="user_email" value="<?php echo e(encrypt($user->email)); ?>">
                  <input type="hidden" name="user_id" value="<?php echo e(encrypt($user->id)); ?>">
                  <input type="radio" required  name="user_name" style="width:5%;" value="<?php echo e(encrypt($user->name)); ?>"> Your Original User Name<br>
                  <input type="radio" required name="user_name" style="width:5%;" value="<?php echo e(encrypt($user->anonymous_name)); ?>"> Anonymous Name<br>
                  <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="token"/>
                  <button type="submit" name="button">Next</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <?php endif; ?>


<!-- end of ask question pop up -->



<div class="row" style="z-index:99;">

  <div class="column nav-bar">
      <!-- <div class="container"> -->
        <h1 class="title"><a href="/">MediStress</a></h1>
        <!-- <a href="/post"><h1 class="title" >PostMan</h1></a> -->
          <div class="circle" ></div>
         			<div class="menu">
         				<ul>

         					<li><a href=
                     <?php if(Session::get('username')!="guest" && Session::has('username')): ?>
                      <?php echo "/user/profile/wap"; ?>
                    <?php else: ?>
                      <?php echo "/user"; ?>

                    <?php endif; ?>
                    >Write A Post</a>
                  </li>

         					<li>
                    <a href= <?php if(Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')): ?>
                      <?php echo e(url('/profile/my')); ?>

                    <?php else: ?>
                      <?php echo "/user"; ?>

                    <?php endif; ?>>User</a>

                  </li>
                    <li>
                       <a href=
                            <?php if(Session::get('username')!="guest" && Session::has('username')): ?>
                              <?php echo "'#' onclick='addgo()'"; ?>
                            <?php else: ?>
                              <?php echo "/user"; ?>

                            <?php endif; ?>

                       >Ask A question</a>
                     </li>


         					<li><a href="../search/mobile/page">Search</a></li>
                   <li><a href="#">Settings</a></li>
                   <li><a href="#">Contact</a></li>
                   <li>
                     <form class="" action="/search/page" method="post">
                     <div class="">
<?php echo e(csrf_field()); ?>

                           <input name="s" placeholder="Search Tags,Question,Post:Press enter to Search" style="width:98%;border:2px solid #4a89dc;border-radius:0;"type="text" />

                              <input type="submit" name="m-search-btn" class="m-search-btn" style="border: 0;
height: 2em;
background-size: contain;
left: 90%;"value="">




                       </div>
                      </form>




                   </li>
         				</ul>
         			</div>
          <div class="burger">
              <div class="x"></div>
              <div class="y"></div>
              <div class="z"></div>
    </div>
              <div class="ico">
                <a href=
                      <?php if(Session::get('username')!="guest" && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')): ?>
                        <?php echo "/write/post"; ?>
                      <?php else: ?>
                        <?php echo "/user"; ?>

                      <?php endif; ?>

                >  <img src="../image/marker.png" alt=""></a>
                  <span class="menu-help-tag">Write A Post</span>
              </div>


              <div class="ico">

                <a href=
                      <?php if(Session::get('username')!="guest" && Session::has('username')): ?>
                        <?php echo "'#' onclick='addgo()'"; ?>
                      <?php else: ?>
                        <?php echo "/user"; ?>

                      <?php endif; ?>

                 ><img src="../image/question.png" alt=""></a>
                 <span class="menu-help-tag">Ask A Question</span>
              </div>
              <?php if(Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')): ?>
              <div class="ico" id="noti-btn">
                <a href="#"><img src="../image/megaphone.png" alt=""></a>
              </div>
              <?php endif; ?>
              <div class="ico">
                <a href=
                       <?php if(Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')): ?>
                          <?php echo "'/profile/my'>  <img  src='../image/password.png' alt='login'"; ?>
                        <?php else: ?>
                          <?php echo "'/user'>  <img  src='../image/login.png' alt='login'"; ?>

                        <?php endif; ?>
                   /> </a>
                   <span class="menu-help-tag">SignIn/register</span>
              </div>
        <div class="ico search-ico">

          <a  ><img style=" border: 0;border-radius: 0;"   src="../image/ppsearch.png" alt="search">  </a>
             <span class="menu-help-tag">Search</span>
        </div>
        <div class="ico search-box">
          <form class="" action="/search/page" method="post">
  <?php echo e(csrf_field()); ?>

            <input type="text" name="s"  placeholder="Search Tags,Question,Post:Press enter to Search" value="">
          </form>
        </div>

    <!-- </div> -->
    <div class="search-result">
      <div class="inner-result-box">
        <div class="row">
          <div class="top-inner-result">
                <span >Answer</span>
          </div>
              <ul id="search-result-tar">




        </div>
      </div>
    </div>
    <div class="noti">
      <header>
          <span>Notification</span>
      </header>

      <ul>
        <li>Coming</li>
        <li>Soon</li>
      </ul>
    </div>
  </div>



</div>
<script type="text/javascript">
$('#noti-btn').click(function(){
  $('.noti').toggleClass('s');

});
  $('.search-box input[name="s"]').keydown(function(){
    $('.search-result').css('display','table');
      var item = $(this).val();
      console.log(item);
      $.ajax({
    		url:"/search",
    		type:"post",
    		dataType:"text",
    		headers: {
    		 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
     		data:{s:item , _token:$('meta[name="csrf-token"]').attr('content')},
        success:function(res){

        $('#search-result-tar').html(res);


        }


  });
  });

$('.search-ico').click(function(){
  if( $('.search-result').css('display')=='table') {
   $('.search-result').css('display','none');
}
  $('.search-box input').toggleClass('s-open');
  $('.search-ico img').toggleClass('s-blur');
});

$('.ico span').hide();
$('.ico').hover(function(){
  $(this).children('span[class="menu-help-tag"]').show();
},function(){
  $(this).children('span[class="menu-help-tag"]').hide();
});



if( 'ontouchstart' in window ){ var click = 'touchstart'; }
else { var click = 'click'; }


$('div.burger').on(click, function(){

    if( !$(this).hasClass('open') ){ openMenu(); }
    else { closeMenu(); }

});


$('div.menu ul li a').on(click, function(e){
  // e.preventDefault();
   closeMenu();
});


function openMenu(){
  $('div.menu').show('slow');
  $('div.circle').show('fast');
  $('div.circle').addClass('expand');

  $('div.burger').addClass('open');
  $('div.x, div.y, div.z').addClass('collapse');
  $('.menu li').addClass('animate');

  setTimeout(function(){
    $('div.y').hide();
    $('div.x').addClass('rotate30');
    $('div.z').addClass('rotate150');
  }, 70);
  setTimeout(function(){
    $('div.x').addClass('rotate45');
    $('div.z').addClass('rotate135');
  }, 120);



}

function closeMenu(){

  $('div.burger').removeClass('open');
$('div.menu').hide('fast');
$('div.circle').hide('slow');
  $('div.x').removeClass('rotate45').addClass('rotate30');
  $('div.z').removeClass('rotate135').addClass('rotate150');
  $('div.circle').removeClass('expand');
  $('.menu li').removeClass('animate');

  setTimeout(function(){
    $('div.x').removeClass('rotate30');
    $('div.z').removeClass('rotate150');
  }, 50);
  setTimeout(function(){
    $('div.y').show();
    $('div.x, div.y, div.z').removeClass('collapse');
  }, 70);

}
function addgo(e){
$('body').css({
  'overflow':'hidden',
  'height':'100%'
});
$('.ask-que-pp').addClass('go');

  console.log('done');

}
function removego(){
  $('body').css({
    'overflow':'auto',
    'height':'100%'
  });
  $('#pp-close').css('transform','rotate(90deg)');
  $('.ask-que-pp.go').removeClass('go');
}
</script>
