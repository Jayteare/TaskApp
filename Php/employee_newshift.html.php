<!DOCTYPE html>
<?php  include 'shiftlookup.php'; ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="stylesheets/styles.css">
    <title>Shift Selection</title>

	  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/css/request.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

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
	}

	.cancelbtn
	{
		color:white;
		font-weight:normal!important;
		font-family: Arial, Helvetica, sans-serif!important;
		border-radius: 4px!important;
		width:40% !important;
		font-size:20px !important;

		background-color:red!important;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
	}

	.submitbtn
	{
		color:white;
		font-weight:normal!important;
		font-family: Arial, Helvetica, sans-serif!important;
		border-radius: 4px!important;
		font-size:20px !important;
		width:40% !important;
	}

	.submitbtn:hover
	{
		color:black!important;
		background:white!important;
	}

	.cancelbtn:hover
	{
		color:black!important;
		background: white!important;
	}

	.table-class
	{
		border-collapse: collapse!important;
		overflow:scroll!important;
		height:100px!important;
	}

	table, th, td
	{
		border-style:none!important;
    padding:0 15px 0 15px;
	}

	.day-body
	{
		float:left!important;
		overflow:scroll!important;
		height:100%!important;
		background:white!important;
	}

	.shift-screen-area
	{
		overflow:auto!important
	}


	ul {list-style-type: none;}
	body {font-family: Verdana, sans-serif;}

	/* Month header */
	.month {
		padding: 70px 25px;
		width: 100%;
		background: #1abc9c;
		text-align: center;
	}

	/* Month list */
	.month ul {
		margin: 0;
		padding: 0;
	}

	.month ul li {
		color: white;
		font-size: 20px;
		text-transform: uppercase;
		letter-spacing: 3px;
	}

	/* Previous button inside month header */
	.month .prev {
		float: left;
		padding-top: 10px;
	}

	/* Next button */
	.month .next {
		float: right;
		padding-top: 10px;
	}

	/* Weekdays (Mon-Sun) */
	.weekdays {
		margin: 0;
		padding: 10px 0;
		background-color:#ddd;
	}

	.weekdays li {
		display: inline-block;
		width: 13.6%;
		color: #666;
		text-align: center;
	}

	/* Days (1-31) */
	.days {
		padding: 10px 0;
		background: #eee;
		margin: 0;
	}

	.days li {
		list-style-type: none;
		display: inline-block;
		width: 13.6%;
		text-align: center;
		margin-bottom: 5px;
		font-size:12px;
		color: #777;
	}

	/* Highlight the "current" day */
	.days li .active {
		padding: 5px;
		background: #1abc9c;
		color: white !important
	}

	.w3-theme-l5
	{
		background:white!important;
	}

	.w3-card
	{
		box-shadow:none!important;
		border: 2px solid #00ADB5!important;
	}

	.w3-button
	{
		color:white!important;
		background:#00ADB5!important;
	}

	.w3-button:hover
	{
		color:black!important;
		background:white!important;
	}

	.container-enroll
	{
		padding-top:100px!important;
	}

	.container
	{
		overflow:scroll!important;
	}

	td.day-body, th.day-body
	{
		border: 1px solid #dddddd;
		text-align: left;
		padding: 30px;
	}

  .title-body{
  font-size: 18px;
  font-weight: bold;

}

.shift-body{
  border: 1px solid #dddddd;
  border-radius: 25px;
  padding: 8px 3px;
}

.shift-screen-area{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  grid-template-rows: 15% 85%;
  grid-row-gap: 2px;
}

.shift-button{
  border-radius: 25px;
  font-size: 14px;
  font-weight: bold;
}

.sunday-title{
  grid-row: 1;
  grid-column: 1;
  justify-self: center;
  padding: 5px 5px;
  border: 1px solid #dddddd;
  border-radius: 25px;
}

.sunday-body{
  grid-row: 2;
  grid-column: 1;

}

.monday-title{
  grid-row: 1;
  grid-column: 2;
  justify-self: center;
  padding: 5px 5px;
  border: 1px solid #dddddd;
  border-radius: 25px;
}

.monday-body{
  grid-row: 2;
  grid-column: 2;
}

.tuesday-title{
  grid-row: 1;
  grid-column: 3;
  justify-self: center;
  padding: 5px 5px;
  border: 1px solid #dddddd;
  border-radius: 25px;
}

.tuesday-body{
  grid-row: 2;
  grid-column: 3;
}

.wednesday-title{
  grid-row: 1;
  grid-column: 4;
  justify-self: center;
  padding: 5px 5px;
  border: 1px solid #dddddd;
  border-radius: 25px;
}

.wednesday-body{
  grid-row: 2;
  grid-column: 4;
}

.thursday-title{
  grid-row: 1;
  grid-column: 5;
  justify-self: center;
  padding: 5px 5px;
  border: 1px solid #dddddd;
  border-radius: 25px;
}

.thursday-body{
  grid-row: 2;
  grid-column: 5;
}

.friday-title{
  grid-row: 1;
  grid-column: 6;
  justify-self: center;
  padding: 5px 5px;
  border: 1px solid #dddddd;
  border-radius: 25px;
}

.friday-body{
  grid-row: 2;
  grid-column: 6;
}

.saturday-title{
  grid-row: 1;
  grid-column: 7;
  justify-self: center;
  padding: 5px 5px;
  border: 1px solid #dddddd;
  border-radius: 25px;
}

.saturday-body{
  grid-row: 2;
  grid-column: 7;
}

	</style>

  </head>
  	<!-- Navbar -->
    <div class="w3-top">
		<div class="w3-bar w3-theme-d2 w3-left-align w3-large">
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			<a href="employee_homepage.html.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">ScheduleMi</a>
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
			<div class="w3-dropdown-hover w3-hide-small">
				<button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>
				<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
					<a href="#" class="w3-bar-item w3-button">Empty</a>
				</div>
			</div>
			<a href="index.html.login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
				<span class="glyphicon glyphicon-chevron-left"></span> Logout
			</a>
		</div>
    </div>
  <body>
    <h3>Week of <?php echo date("F jS, Y", strtotime($daterange[0])) ?> to <?php echo date("F jS, Y", strtotime($daterange[1])) ?></h3>
    <!--
      This form takes a date selected by the user and stores it, and the reloads the page.  Due to a stored date
      taking priority over the default current date in shiftlookup.php, the page will be loaded with the selected
      week's shifts rather than the current week's.
    -->
    <form action="462input_handler.php" method="post">
      <div>
        <label for="party">Choose your desired date to view:</label>
        <input type="date" id="shift_date_range" name="shift_date_range" required>
        <input type="submit" name="shift_date_submit_empqueue">
      </div>
    </form>
    <!--
      This container holds the seven days, each section of which displays the appropriate data for each day.
      Each day takes the results of one of the seven queries in shiftlookup.php and populates the container with
      the shifts retrieved.
    -->
    <div class= "shift-screen-area">
      <!-- Sunday. -->
      <div class= "sunday-title">
        <span class="title-body">Sunday</span>
      </div>
      <div class="sunday-body">
      <?php
        foreach($day1result as $row){
      ?>
        <div class="shift-body">
          <form action="employee_newshift.html.php" method="post">
            Shift Day: <?php echo $row['date'] ?> <br>
            Shift Time: <?php echo $row['time_start'] ?> to <?php echo $row['time_end'] ?> <br>
            Workers Needed: <?php echo $row['workers_needed'] ?> <br>
            <input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
          </form>
        </div>
        <br>
      <?php
  		    if(isset($_POST[$row['idshift']])){
  			    $_SESSION['shift_enroll_id'] = $row['idshift'];
            ?>
            <script>window.location = "https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php";</script>
  			  <?php }
  		  }
  		?>
      </div>
      <!-- Monday. -->
      <div class="monday-title">
        <span class="title-body">Monday</span>
      </div>
      <div class="monday-body">
      <?php
        foreach($day2result as $row){
      ?>
        <div class="shift-body">
          <form action="employee_newshift.html.php" method="post">
            Shift Day: <?php echo $row['date'] ?> <br>
            Shift Time: <?php echo $row['time_start'] ?> to <?php echo $row['time_end'] ?> <br>
            Workers Needed: <?php echo $row['workers_needed'] ?> <br>
            <input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
          </form>
        </div>
        <br>
        <?php
    		    if(isset($_POST[$row['idshift']])){
    			    $_SESSION['shift_enroll_id'] = $row['idshift'];
              ?>
              <script>window.location = "https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php";</script>
    			  <?php }
    		  }
    		?>
      </div>
      <!-- Tuesday. -->
      <div class="tuesday-title">
        <span class="title-body">Tuesday</span>
      </div>
      <div class="tuesday-body">
      <?php
        foreach($day3result as $row){
      ?>
        <div class="shift-body">
          <form action="employee_newshift.html.php" method="post">
            Shift Day: <?php echo $row['date'] ?> <br>
            Shift Time: <?php echo $row['time_start'] ?> to <?php echo $row['time_end'] ?> <br>
            Workers Needed: <?php echo $row['workers_needed'] ?> <br>
            <input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
          </form>
        </div>
        <br>
        <?php
    		    if(isset($_POST[$row['idshift']])){
    			    $_SESSION['shift_enroll_id'] = $row['idshift'];
              ?>
              <script>window.location = "https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php";</script>
    			  <?php }
    		  }
    		?>
      </div>
      <!-- Wednesday. -->
      <div class="wednesday-title">
        <span class="title-body">Wednesday</span>
      </div>
      <div class="wednesday-body">
      <?php
        foreach($day4result as $row){
      ?>
        <div class="shift-body">
          <form action="employee_newshift.html.php" method="post">
            Shift Day: <?php echo $row['date'] ?> <br>
            Shift Time: <?php echo $row['time_start'] ?> to <?php echo $row['time_end'] ?> <br>
            Workers Needed: <?php echo $row['workers_needed'] ?> <br>
            <input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
          </form>
        </div>
        <br>
        <?php
    		    if(isset($_POST[$row['idshift']])){
    			    $_SESSION['shift_enroll_id'] = $row['idshift'];
              ?>
              <script>window.location = "https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php";</script>
    			  <?php }
    		  }
    		?>
      </div>
      <!-- Thursday. -->
      <div class="thursday-title">
        <span class="title-body">Thursday</span>
      </div>
      <div class="thursday-body">
      <?php
        foreach($day5result as $row){
      ?>
        <div class="shift-body">
          <form action="employee_newshift.html.php" method="post">
            Shift Day: <?php echo $row['date'] ?> <br>
            Shift Time: <?php echo $row['time_start'] ?> to <?php echo $row['time_end'] ?> <br>
            Workers Needed: <?php echo $row['workers_needed'] ?> <br>
            <input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
          </form>
        </div>
        <br>
        <?php
    		    if(isset($_POST[$row['idshift']])){
    			    $_SESSION['shift_enroll_id'] = $row['idshift'];
              ?>
              <script>window.location = "https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php";</script>
    			  <?php }
    		  }
    		?>
      </div>
      <!-- Friday. -->
      <div class="friday-title">
        <span class="title-body">Friday</span>
      </div>
      <div class="friday-body">
      <?php
        foreach($day6result as $row){
      ?>
        <div class="shift-body">
          <form action="employee_newshift.html.php" method="post">
            Shift Day: <?php echo $row['date'] ?> <br>
            Shift Time: <?php echo $row['time_start'] ?> to <?php echo $row['time_end'] ?> <br>
            Workers Needed: <?php echo $row['workers_needed'] ?> <br>
            <input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
          </form>
        </div>
        <br>
        <?php
    		    if(isset($_POST[$row['idshift']])){
    			    $_SESSION['shift_enroll_id'] = $row['idshift'];
              ?>
              <script>window.location = "https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php";</script>
    			  <?php }
    		  }
    		?>
      </div>
      <!-- Saturday. -->
      <div class="saturday-title">
        <span class="title-body">Saturday</span>
      </div>
      <div class="saturday-body">
      <?php
        foreach($day7result as $row){
      ?>
        <div class="shift-body">
          <form action="employee_newshift.html.php" method="post">
            Shift Day: <?php echo $row['date'] ?> <br>
            Shift Time: <?php echo $row['time_start'] ?> to <?php echo $row['time_end'] ?> <br>
            Workers Needed: <?php echo $row['workers_needed'] ?> <br>
            <input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
          </form>
        </div>
        <br>
        <?php
    		    if(isset($_POST[$row['idshift']])){
    			    $_SESSION['shift_enroll_id'] = $row['idshift'];
              ?>
              <script>window.location = "https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php";</script>
    			  <?php }
    		  }
    		?>
      </div>
    </div>
  </body>
</html>
