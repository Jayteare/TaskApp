<!DOCTYPE html>
<?php
  session_start();
  $_SESSION['user'] = "";
  $_SESSION['fname'] = "";
  $_SESSION['lname'] = "";
?>
<html>
<html lang="en-us">
<head>
	<!--  App Title  -->
	<title>Registration</title>
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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


	<style>

	.column
	{
		float: center;
		padding: 100px!important;;
		display:table;
		margin-left: 400px!important;

		font-weight:normal!important;
		font-family: Arial, Helvetica, sans-serif!important;
		color:black!important;
	}

	.column-text
	{
		color:black;
		padding: 10px;
		width: 600px;
		height: 500px;
	}

	.button
	{
		border: 2px solid #00ADB5!important;
		background: #00ADB5!important;
		border-radius: 4px    !important;
		color:white!important;
		font-size:20px !important;
	}

	.button:hover
	{
		color:red!important;
	}


	.w3-opacity
	{
		text-align: center!important;
	}

	.w3-bar
	{
		background: #00ADB5!important;
		border:0px white !important;
	}

	.container
	{
		color:black!important;
		background: white!important;
	}

	.rows
	{
		float: center;
		padding: 100px!important;;
		display:table;
		margin-left: 400px!important;

		font-weight:normal!important;
		font-family: Arial, Helvetica, sans-serif!important;
		color:black!important;
	}

	.row-text
	{
		float: left;
		padding: 50px;
		width: 500px;
		height: 500px;
	}

	ul.company-req
	{
		list-style-type: square;
		font-weight:normal!important;
		font-family: Arial, Helvetica, sans-serif!important;
	}

	.register-button
	{
		border: 2px solid #00ADB5!important;
		background: #00ADB5!important;
		border-radius: 4px    !important;
		text-align: center    !important;
		color:white           !important;

		font-weight:normal!important;
		font-family: Arial, Helvetica, sans-serif!important;
		font-size: 20px !important;

		margin: 25px 25px     !important;
		padding-left: 25px    !important;
		padding-right: 25px   !important;
		padding-top: 25px     !important;
		padding-bottom: 25px  !important;
	}

	.register-button:hover
	{
		color:black!important;
		background:white!important;
		border: 2px solid white!important;
	}

	.cancel-button
	{
		border: 2px solid red !important;
		background: red       !important;
		border-radius: 8px    !important;
		color:white           !important;

		font-weight:normal!important;
		font-family: Arial, Helvetica, sans-serif!important;
		font-size: 20px !important;

		margin: 25px 25px     !important;
		padding-left: 25px    !important;
		padding-right: 25px   !important;
		padding-top: 25px     !important;
		padding-bottom: 25px  !important;
	}

	.cancel-button:hover
	{
		border: 2px solid white !important;
		background: white       !important;
		border-radius: 8px    !important;
		color:red           !important;
	}

	</style>

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
					<li><a href="index.html.php"><span>Home</span></a></li>
					<li><a href="index.html.php#fh5co-services" data-nav-section="services"><span>Services</span></a></li>
					<li><a href="index.html.php#fh5co-team" data-nav-section="team"><span>Team</span></a></li>
					<li><a href="index.html.php#fh5co-faq" data-nav-section="faq"><span>FAQ</span></a></li>
					<li class="call-to-action"><a class="sign-up" href="registration.html.php"><span>Register</span></a></li>
					<li class="call-to-action"><a class="log-in" href="index.html.login.php"><span>Login</span></a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
	<body>
		<div class="rows">
			<div class="row-text">
				<h>Company Registration</h>
				<br><br>
				<p>Register your company with the Taskerapp. However there are some requirements and verifications that needs to be taken aplace.</p>
				<ul class="company-req">
					<li>Bob</li>
					<li>Jill</li>
				</ul>
				<br>
				<button onclick="document.getElementById('id01').style.display='block'"  class="register-button">Company Registration</button>
			</div>

			<div class="row-text">
				<h>Employee Registration</h>
				<br><br>
				<p>Register your company with the Taskerapp. However there are some requirements and verifications that needs to be taken aplace.</p>
				<ul class="company-req">
					<li>Bob</li>
					<li>Jill</li>
				</ul>
				<br>
				<button onclick="document.getElementById('id02').style.display='block'"  class="register-button">Employee Registration</button>
			</div>
		</div>
		<div id="id01" class="w3-modal">
			<form action="462input_handler.php" method="post" style="border:0px solid #ccc">
				<div class="w3-modal-content">
					<div class="w3-container">
						<h1>Sign Up</h1>
						<p>Please fill in this form to create an account.</p>

						<div class="column-text">
							<label for="new_company_title"><b>Company Title</b></label>
							<input type="text" placeholder="Enter Desired Company Title" name="new_company_title" required>
							<br>
							<label for="new_company_pin"><b>Company PIN</b></label>
							<input type="text" placeholder="Enter Desired Company PIN" name="new_company_pin" required>
							<br>
							<label for="new_owner_username"><b>Account Manager Username</b></label>
							<input type="text" placeholder="Enter Username for Manager" name="new_owner_username" required>
							<br>
							<label for="new_owner_fname"><b>Account Manager First Name</b></label>
							<input type="text" placeholder="Enter Account Manager's First Name" name="new_owner_fname" required>
							<br>
							<label for="new_owner_lname"><b>Account Manager Last Name</b></label>
							<input type="text" placeholder="Enter Account Manager's Last Name" name="new_owner_lname" required>
							<br>
							<label for="new_owner_email"><b>Account Manager Email</b></label>
							<input type="text" placeholder="Enter Account Manager's Email" name="new_owner_email" required>
							<br>
							<label for="new_owner_phone"><b>Company Account Manager Phone Number</b></label>
							<input type="text" placeholder="Enter Account Manager's Phone Number" name="new_owner_phone" required>
							<br>
							<label for="new_owner_password"><b>Enter Password</b></label>
							<input type="password" placeholder="Enter Password" name="new_owner_password" required>
							<br>
							<label for="psw_repeat_owner"><b>Repeat Password</b></label>
							<input type="password" placeholder="Repeat Password" name="psw_repeat_owner" required>
							<br>
							<label>
								<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
							</label>
							<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
							<div class="column-button">
								<button type="submit" class= "register-button" name ="create_company_submit">Submit</button>
								<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel-button">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div id="id02" class="w3-modal">
			<form action="462input_handler.php" method="post" style="border:0px solid #ccc">
				<div class="w3-modal-content">
					<div class="w3-container">
						<h1>Sign Up</h1>
						<p>Please fill in this form to create an new employee account.</p>
						<div class="column-text">
							<label for="new_employee_username"><b>Employee Username</b></label>
							<input type="text" placeholder="Enter Username" name="new_employee_username" required>
							<br>
							<label for="new_employee_pin"><b>Employee Company PIN</b></label>
							<input type="text" placeholder="Enter Company PIN" name="new_employee_pin" required>
							<br>
							<label for="new_employee_fname"><b>Employee Firstname</b></label>
							<input type="text" placeholder="Enter First Name" name="new_employee_fname" required>
							<br>
							<label for="new_employee_lname"><b>Employee Lastname</b></label>
							<input type="text" placeholder="Enter Last Name" name="new_employee_lname" required>
							<br>
							<label for="new_employee_email"><b>Employee Email</b></label>
							<input type="text" placeholder="Enter Email" name="new_employee_email" required>
							<br>
							<label for="new_employee_password"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="new_employee_password" required>
							<br>
							<label for="psw_repeat"><b>Repeat Password</b></label>
							<input type="password" placeholder="Repeat Password" name="psw_repeat" required>
							<br>
							<label>
								<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
							</label>
							<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
							<div class="column-button">
								<button type="submit" class= "register-button" name ="create_employee_submit">Submit</button>
								<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancel-button">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

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


		<?php
	if(isset($_SESSION['employeeCreateErrorMsg']))
	{
      //JavaScript error pop-up is displayed upon detection of invalid submission
      echo '<script type="text/javascript">
              alert("'.$_SESSION['employeeCreateErrorMsg'].'");
            </script>';
      $_SESSION['employeeCreateErrorMsg']=null;
      $_SESSION['new_employee_username']=null;
      $_SESSION['new_employee_password']=null;
      $_SESSION['new_employee_fname']=null;
      $_SESSION['new_employee_lname']=null;
      $_SESSION['new_employee_pin']=null;
      $_SESSION['new_employee_email']=null;
      $_SESSION['new_employee_phone']=null;
    }
	?>
	</body>

	<footer>
		<p>Team TaskerApp</p>
	</footer>
</html>
