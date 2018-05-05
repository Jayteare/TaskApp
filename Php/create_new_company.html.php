<!DOCTYPE html>
<html>
	<?php session_start(); ?>
	<head>
		<meta charset="utf-8">
		<!--  App Title  -->
		<title>TaskApp - Free Tasking Application</title>
		<!--  App Description  -->
		<meta name="description" content=""/>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

		<!-- Bootstrap  -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<!-- Style -->
	</head>

<header role="banner" id="fh5co-header">
	<div class="fluid-container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				<a class="" href="#">TaskerApp</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
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
		<form action="462input_handler.php" method="post" style="border:1px solid #ccc">
			<div class="row">
				<div class="column">
					<h1>Sign Up</h1>
					<p>Please fill in this form to create an account.</p>
				</div>
				<div class="column">

					<label for="new_company_title"><b>Company Title</b></label>
					<input type="text" placeholder="Enter Desired Company Title" name="new_company_title" required>

					<label for="new_company_pin"><b>Company PIN</b></label>
					<input type="text" placeholder="Enter Desired Company PIN" name="new_company_pin" required>

					<label for="new_owner_username"><b>Account Manager Username</b></label>
					<input type="text" placeholder="Enter Username for Manager" name="new_owner_username" required>

					<label for="new_owner_fname"><b>Account Manager First Name</b></label>
					<input type="text" placeholder="Enter Account Manager's First Name" name="new_owner_fname" required>

					<label for="new_owner_lname"><b>Account Manager Last Name</b></label>
					<input type="text" placeholder="Enter Account Manager's Last Name" name="new_owner_lname" required>

					<label for="new_owner_email"><b>Account Manager Email</b></label>
					<input type="text" placeholder="Enter Account Manager's Email" name="new_owner_email" required>

					<label for="new_owner_phone"><b>Company Account Manager Phone Number</b></label>
					<input type="text" placeholder="Enter Account Manager's Phone Number" name="new_owner_phone" required>

					<label for="new_owner_password"><b>Enter Password</b></label>
					<input type="password" placeholder="Enter Password" name="new_owner_password" required>

					<label for="psw_repeat_owner"><b>Repeat Password</b></label>
					<input type="password" placeholder="Repeat Password" name="psw_repeat_owner" required>

					<label>
						<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
					</label>
					<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

					<div class="clearfix">
						<button type="button" onclick="location.href = 'registration.html.php';" class="cancelbtn">Cancel</button>
						<button type="submit" name="create_company_submit" class="signupbtn">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php
	if(isset($_SESSION['companyCreateErrorMsg'])){
      //JavaScript error pop-up is displayed upon detection of invalid submission
      echo '<script type="text/javascript">
              alert("'.$_SESSION['companyCreateErrorMsg'].'");
            </script>';
      $_SESSION['companyCreateErrorMsg']=null;
      $_SESSION['new_company_title']=null;
      $_SESSION['new_company_pin']=null;
      $_SESSION['new_owner_username']=null;
      $_SESSION['new_owner_password']=null;
      $_SESSION['new_owner_fname']=null;
      $_SESSION['new_owner_lname']=null;
      $_SESSION['new_owner_pin']=null;
      $_SESSION['new_owner_email']=null;
      $_SESSION['new_owner_phone']=null;
    }
	?>
	</body>
</html>
