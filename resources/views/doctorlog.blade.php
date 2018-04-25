
<!DOCTYPE HTML>
<html>
<head>
<title>Login Here</title>
<!-- Custom Theme files -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--script-->
 <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
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

.head{

          margin: 1% auto 0;
background-color: #e8e6ff;
}
.submit input{

}
  .logo{
    background-image: url(../image/66468562db3b343617b4912256cad666.png);
  background-position: center;
  background-origin: content-box;
  background-size: cover;
background-repeat: no-repeat;
background-color: transparent;
  }
  .logo-top h1{
    color: #757575;
    margin-top: 5em;
  }
  .logo-bottom{
    display: none;
  }
</style>
<body>
	<div class="head">
		<div class="logo" >

			<div class="logo-top">
				<h1>Doctor Login Form</h1>


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
								<form  method="post" action="/insert">
                  <input type="hidden" value="{{ csrf_token() }}" name="token"/>
                  <input placeholder="User Name" class="name active" name="Name" type="text" required="">
									<input placeholder="Email" class="email" type="text" name="email" required="">
									<input placeholder="Anonymous Name" class="name" type="text" name="anonymous_name" required="">
                  <input placeholder="Password" class="password"  type="password" name="password" required="">
                  <input placeholder="User Name" class="name active" name="Name" type="text" required="">
                  <input placeholder="Email" class="email" type="text" name="email" required="">
                  <input placeholder="Anonymous Name" class="name" type="text" name="anonymous_name" required="">
                  <input placeholder="Password" class="password"  type="password" name="password" required="">
                  <div class="login-bottom">
                    <div class="submit">
                      <input type="submit" name="reg" value="register">
                    </div>

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
font-size: 1.6em;">For <strong>User :</strong><br><a href="/user" style="    color: #df5799;">CLICK HERE <strong>&rarr;</strong></a></li>
				<div class="clear"></div>
			</ul>
		</div>

</body>
</html>
