<!DOCTYPE html>
<?php
  session_start();
  $_SESSION['user'] = "";
  $_SESSION['fname'] = "";
  $_SESSION['lname'] = "";
?>
<html>
<head>

	<!--  App Title  -->
	<title>ScheduleMi - Free Scheduling Application</title>
	<!--  App Description  -->
	<meta name="description" content=""/>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/css/bootstrap.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/css/style.css">

	<style>

	.container
	{
		padding: 100px;
		text-align: center!important;
		border 3px solid green!important;

		font-weight:normal!important;
		font-family: Arial, Helvetica, sans-serif!important;
	}

	</style>

</head>

<header role="banner" id="fh5co-header">
	<div class="fluid-container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				<a class="" href="#">ScheduleMi</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-nav-section="home"><span>Home</span></a></li>
					<li><a href="#" data-nav-section="services"><span>Services</span></a></li>
					<li><a href="#" data-nav-section="team"><span>Team</span></a></li>
					<li><a href="#" data-nav-section="faq"><span>FAQ</span></a></li>
					<li class="call-to-action"><a class="sign-up" href="registration.html.php"><span>Register</span></a></li>
					<li class="call-to-action"><a class="log-in" href="index.html.login.php"><span>Login</span></a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>

<body>

	<div class="container">
		<section>
			<div class="panel panel-default top caja">
			  <div class="panel-body">
				<h3 class="text-center">Login</h3>

				<form action="462input_handler.php" method="post">
					<div class="input-group input-group-lg">
					  <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
					  <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" required>
					</div>
					<br>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
					  <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" required>
					</div>
					<br>
					 <button type="submit" name="login_submit" class="btn btn-primary btn-block">Submit</button>

				</form>
			  </div>
			</div>
		</section>
	</div>


	</body>
</html>
