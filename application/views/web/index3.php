<!DOCTYPE html>

<style>
.boxTransparan {
 
 background-color: rgba(51,51,51,0.3);
 position: absolute;

}

input[type=text],[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
	background-color: rgba(86, 163, 252, 0.3);
    color: white;
}


    


</style>

<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link href="<?php echo base_url('assets/admin-pro/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/admin-pro/css/pages/login-register-lock.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/admin-pro/css/style.css')?>" rel="stylesheet">

</head>

<body class="card-no-border">
  <!-- <div id="login-button">
  <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
  </img>
  </div> -->
	<section id="wrapper">
		<div class="login-register" style="background-image:url(<?php echo base_url('assets/admin-pro/images/background/Combat-Telkomsel.jpg');?>">
			<div class="login-box card">
				<div class="card-body boxTransparan">
		<!-- <span class="close-btn">
	    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
		</span> -->

					<form class="form-horizontal form-material" role="form" action="<?php echo site_url('web/proses');?>" method="post">
						<h3 class="box-title m-b-20"><b><font color="#F0F8FF">Sign In</font></b></h3>
							<div class="form-group ">
								<div class="col-xs-12">
									<input  type="text" name="username" required="" placeholder="Username">
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12">
									<input type="password" name="password" required="" placeholder="Password">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<div class="checkbox checkbox-info pull-left p-t-0">
											<br></br>
											<input id="checkbox-signup" type="checkbox" class="filled-in chk-col-light-blue" checked="checked">
											<label id="remember" for="checkbox-signup"> Remember me </label>
									</div>
									<a href="javascript:void(0)" id="forgotten" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
								</div>
							</div>
							<div class="form-group text-center">
									<div class="col-xs-12 p-b-20">
											<button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
									</div>
							</div>

						<!-- <div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-success btn-sm">
						Sign in</button>
						<button type="reset" class="btn btn-default btn-sm">
						Reset</button>
						</div> -->

				    <!-- <div id="remember-container">
				      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
				      <span id="remember">Remember me</span>
				      <span id="forgotten">Forgotten password</span>
				    </div> -->
					</form>
				</div>
			</div>
		</div>
	</section>

<!-- Forgotten Password Container
<div id="forgotten-container">
   <h1>Forgotten</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form>
    <input type="email" name="email" placeholder="E-mail">
    <a href="#" class="orange-btn">Get new password</a>
</form>
</div>
-->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
	<script src="<?php echo base_url('assets/admin-pro/plugins/jquery/jquery.min.js')?>"></script>
	<!-- Bootstrap popper Core JavaScript -->
	<script src="<?php echo base_url('assets/admin-pro/plugins/bootstrap/js/popper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/admin-pro/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<!--Custom JavaScript -->
	<script type="text/javascript">
			$(function() {
					$(".preloader").fadeOut();
			});
			$(function() {
					$('[data-toggle="tooltip"]').tooltip()
			});
			// ==============================================================
			// Login and Recover Password
			// ==============================================================
			$('#to-recover').on("click", function() {
					$("#loginform").slideUp();
					$("#recoverform").fadeIn();
			});
	</script>

  <script src="<?php echo base_url('assets/login-form/js/index.js');?>"></script>


</body>
</html>
