<!DOCTYPE html>
<?php
  session_start();
  $_SESSION['user'] = "";
  $_SESSION['fname'] = "";
  $_SESSION['lname'] = "";
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <title>Login</title>
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
    <main class="main-content">
      <div class="content-box">
        <span class="title-text">Placeholder Scheduling Solutions</span>
        <form action="462input_handler.php" method="post">
          Username:<br>
          <input type="text" name="username"><br>
          Password:<br>
          <input type="password" name="password" ><br><br>
          <input type="submit" name="login_submit" value="Submit">
        </form>
      </div>
    </main>
  </body>
</html>
