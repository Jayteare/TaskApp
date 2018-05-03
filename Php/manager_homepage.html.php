<!doctype html>
<?php session_start() ?>
<html>
  <head>
    <!--  App Title  -->
    <title>TaskApp - Free Tasking Application</title>
    <!--  App Description  -->
    <meta name="description" content=""/>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
  	<!-- <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
		<!-- Animate.css -->
    <link rel="stylesheet" href="css/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/css/simple-line-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/css/style.css">
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
            <li>
							<a href="#" data-nav-section="services"><span>Services</span></a>
						</li>
            <li>
							<a href="#" data-nav-section="team"><span>Team</span></a>
						</li>
            <li>
							<a href="#" data-nav-section="faq"><span>FAQ</span></a>
						</li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <body>
    <div id="title">
      <h1>Manager Portal<h1>
    </div>
    <div id = "wrapper" align="center">
      <div id = "navMenue">
        <ul>
          <li>
		<a href="create_shifts.html.php">Create Shifts</a>
	  </li>
          <li>
		<a href="manager_assign_shifts.html.php">Assign Shifts</a>
	  </li>
          <li>
		<a href="view_schedule.html.php">View Weekly Schedule</a>
	  </li>
	  <li>
		  <a href="manager_approval.html.php">List of request day off </a>
	  </li>
          <li>
		<a href="manager_day_off.html.php" >Approval Day Off</a>
	  </li>
          <?php if($_SESSION['role'] == "Owner"){?>
          <li>
            <a href="create_new_manager.html.php" >Add New Manager</a>
          </li>
	  <li>
            <a href="https://taskingapplication.herokuapp.com/Php/index.html.php" >Logout</a>
          </li>
		
		 
          <?php } ?>
	      </ul>
	    </div>
    </div>
  </body>
</html>
