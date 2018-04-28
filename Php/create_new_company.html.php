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

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
	<body>
	<?php
      if(isset($_SESSION['companyCreateErrorMsg'])){ //Displays when 462input_handler.php detects an invalid submission
    ?>
		<form action="462input_handler.php" method="post" style="border:1px solid #ccc">
			<div class="row">
				<div class="column">
					<h1>Sign Up</h1>
					<p>Please fill in this form to create an account.</p>
				</div>
				<div class="column">
				
					<label for="company-title"><b>Company Title</b></label>
					<input type="text" placeholder="Enter Company Title" name="new_company_title" required>
					
					<label for="company-pin"><b>Company PIN</b></label>
					<input type="text" placeholder="Enter Company PIN" name="new_company_pin" required>
					
					<label for="company-manager"><b>Company Account Manager</b></label>
					<input type="text" placeholder="Enter Company Manager" name="new_owner_username" required>
					
					<label for="email"><b>Email</b></label>
					<input type="text" placeholder="Enter Email" name="email" required>

					<label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="new_owner_password" required>

					<label for="psw-repeat"><b>Repeat Password</b></label>
					<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

					<label>
						<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
					</label>
					<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

					<div class="clearfix">
						<button type="button" class="cancelbtn">Cancel</button>
						<button type="submit" name="create_company_submit" class="signupbtn">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php } ?>
	</body>
</html>
