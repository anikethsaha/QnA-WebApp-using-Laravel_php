
<!DOCTYPE HTML>
<html>
<head>
<title>Login Here</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--script-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });

</script>
<!--script-->

</head>
<style media="screen">
  .logo{
    background-image: url("../image/flat-illustration-of-heart-with-stethoscope-prescription-pad-and-medicines-for-medical-concept_1302-5677.jpg");
    background-position: center;
    background-origin: content-box;
    background-size: cover;
  background-repeat: no-repeat;
  background-color: transparent;
  }
  .logo-bottom{
    display: none;
  }
  .logo-top h1{
    color: #757575;


  }
	#status{

font-size: 1.4em;
	}
	.ok{
		margin: auto 4em;
font-size: 1em;
color: green;
	}
	.not-ok{
		color: red;
		    margin: auto 4em;
		    text-align: center;
				font-size: .7em;
	}
</style>
<body>
	<div class="head">
		<div class="logo">

			<div class="logo-top">
				<h1>User Login Form</h1>


			</div>
			<div class="logo-bottom">
				<section class="sky-form">
					<label class="radio"><input type="radio" name="radio" checked=""><i></i>Ask Unlimited Medical Question</label>
					<label class="radio"><input type="radio" name="radio"><i></i>Answer/help other user's Question</label>
					<label class="radio"><input type="radio" name="radio"><i></i>Vote other's Answer/Question</label>
				</section>
			</div>
		</div>
		<div class="login">
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">

						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><label>/</label><span>Sign up</span></li>

						<div class="clearfix"></div>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-top">
								<form  method="post" action="/logen">
                     {{ csrf_field() }}

                  <input type="text" name="username" class="email"placeholder="Email" required="" />
									<input type="password" name="password" class="password" placeholder="Password" required="" />
                  <div class="login-bottom login-bottom1">
                    <div class="submit">
                      <input type="submit" name="log" value="login">
                    </div>
                    <ul>

                      <li><p>Forgot <a href="#" style="color:#44c7f4;">password?</a></p></li>
                    </ul>
                    <div class="clear"></div>
                  </div>
								</form>

							</div>
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="login-top">
								<form  method="post" id="tar"  action="/insert" enctype="multipart/form-data">
                  <input type="hidden" value="{{ csrf_token() }}" name="token"/ >
                  <input placeholder="User Name" class="name active" name="Name"  type="text" required="">
									<input placeholder="Email" class="email" type="text" name="email" required="">
									<div class="" style="color: grey;
    border-bottom: 1px solid grey;
    padding: 1em;
    padding-bottom: 2em;
    outline: none;
    font-size: 16px;
    /* color: #cecfd3; */
    padding: 20px 30px 10px 10px;
    margin: 0;
    width: 89.87%;
    border: none;
    border-bottom: 2px solid #cecfd3;
    -webkit-appearance: none;">
										<label for="">Upload Your avatar</label>
										<input type="file" name="avatar" value="" style="padding: 1em 0;">
									</div>


									<input placeholder="Anonymous Name" class="name" type="text" name="anonymous_name" required="">
                  <input placeholder="Password" class="password"  type="password" name="password" required="">
                  <div class="login-bottom">
                    <div class="submit">
                      <input type="submit"  name="reg" value="register">
                    </div>
										<span id="status" ><p></p></span>
                    <div class="clear"></div>
                  </div>
								</form>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clear"></div>
	</div>
	<div class="account">
			<ul>
         <li><a href="/post" style="    color: #44c7f4;
    font-size: 1.7em;"> &#x2190; B A C K</a></li>
    <li style="    color: white;
font-size: 1.6em;">For <strong>doctors :</strong><br><a href="/login/doctor" style="    color: #df5799;">CLICK HERE <strong>&rarr;</strong></a></li>
				<div class="clear"></div>
			</ul>
		</div>

</body>
</html>
<script type="text/javascript">
$("#tar input[name='email']").keyup(function(){
	var temp=$(this).val();

	$.ajax({
		url:"/emailinputcheck",
		type:"post",
		dataType:"text",
		headers: {
		 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
		data:{u_data:temp , _token:$('meta[name="csrf-token"]').attr('content')},
		success:function(res){



						if(res!="success"){
							$('.submit input').css('border-color','red');

											$('#status p').html("this email is already registered");
											if($('#status p').hasClass('ok')){
												$('#status p').removeClass('ok');
											}
											$('#status p').addClass('not-ok')


											$('form[id="tar"]').submit(function() {
							  						return false;
										});
						}else{

											$('#status p').html('&#10004');
											if($('#status p').hasClass('not-ok')){
												$('#status p').removeClass('not-ok');
											}
											$('#status p').addClass('ok');
											$('.submit input').css('border-color','green');
											$('form[id="tar"]').submit(function() {
														return true;
										});
						}
					}


});
});

$("#tar input[name='Name'],#tar input[name='anonymous_name']").keyup(function(){
	var temp=$(this).val();
	$.ajax({
		url:"/uinputcheck",
		type:"post",
		dataType:"text",
		headers: {
		 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
 		data:{u_data:temp , _token:$('meta[name="csrf-token"]').attr('content')},
		success:function(res){



			if(res!="success"){
				$('.submit input').css('border-color','red');

								$('#status p').html("this name/anonymous name is already taken");
								if($('#status p').hasClass('ok')){
									$('#status p').removeClass('ok');
								}
								$('#status p').addClass('not-ok')


								$('form[id="tar"]').submit(function() {
				  						return false;
							});
			}else{

								$('#status p').html('&#10004');
								if($('#status p').hasClass('not-ok')){
									$('#status p').removeClass('not-ok');
								}
								$('#status p').addClass('ok');
								$('.submit input').css('border-color','green');
								$('form[id="tar"]').submit(function() {
											return true;
							});
			}
		}

	});

});

</script>
