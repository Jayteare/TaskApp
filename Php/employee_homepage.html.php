<!DOCTYPE html>
<?php
  session_start();
  $fname =  $_SESSION['fname'];
  $lname =  $_SESSION['lname'];
  $username =   $_SESSION['cur_user'];
  if(isset($_POST['request_submit'])){
    $shift_ID = $_POST['Shift_ID'];
    $manager_first_name = $_POST['manager_first_name'];
    $manager_last_name = $_POST['manager_last_name'];
    $startShift = $_POST['Start_Shift'];
    $endShift = $_POST['End_Shift'];
    $reason = $_POST['reason'];
    
      $db = new mysqli('us-cdbr-iron-east-05.cleardb.net:3306', 'b52e20d0f5da46', 'fc4f25b0', 'heroku_0188da0de4a5cfa');

    $query = "INSERT INTO prerequest (Shift_ID, userName, MFName,MLName,EFName,ELName,StartShift,EndShift, Reason, Status)
              VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('dsssssssss',
                      $shift_ID,
                      $username,
                      $manager_first_name,
                      $manager_last_name ,
                      $fname,
                      $lname,
                      $startShift ,
                      $endShift,
                      $reason,
                      $Status = "Pending");
    $stmt->execute();
    header('Location:https://taskingapplication.herokuapp.com/Php/employee_homepage.html.php');
  }
  
  // including the database connection file
  include("initiate_db.php");
  //getting id from url
  $idshift = $_GET['idshift'];
  //selecting data associated with this particular id
  $query = "SELECT date,time_start,time_end,workers_needed FROM created_shifts WHERE idshift=$idshift";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll();
  foreach($result as $row){
    $day = $row['date'];	  
    $starttime = $row['time_start'];
    $endtime = $row['time_end'];
    $numreq=$row['workers_needed'];
  }
?>
<html>
  <title>Employee Homepage</title>
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
	
	</style>
  
<body class="w3-theme-l5">
	<!-- Navbar -->
    <div class="w3-top">
		<div class="w3-bar w3-theme-d2 w3-left-align w3-large">
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">TaskerApp</a>
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
			<div class="w3-dropdown-hover w3-hide-small">
				<button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>
				<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
					<a href="#" class="w3-bar-item w3-button">Empty</a>
				</div>
			</div>
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
				<span class="glyphicon glyphicon-chevron-left"></span> Logout
			</a>
		</div>
    </div>
	
    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
      <!-- The Grid -->
      <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
			<!-- Profile -->
			<div class="w3-card w3-round w3-white">
				<div class="w3-container">
					<h4 class="w3-center"><?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname']; ?>.</h4>
					<p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
					<hr>
					<p><i class="fa fa-fw w3-margin-right w3-text-theme"></i><?php echo $_SESSION['company_pin'] ?> </p>
					<p><i class="fa fa-fw w3-margin-right w3-text-theme"></i><?php echo $_SESSION['email'] ?> </p>
					<p><i class="fa fa-fw w3-margin-right w3-text-theme"></i><?php echo $_SESSION['phone'] ?> </p>
				</div>
			</div>
			<br>
			<!-- Accordion -->
			<div class="w3-card w3-round">
				<div class="w3-white">
					<button onclick="document.getElementById('id01').style.display='block'"  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Enroll in Shifts</button>
					<button onclick="document.getElementById('id02').style.display='block'"  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Request day off</button>
					<button onclick="document.getElementById('id03').style.display='block'"  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> New Shifts</button>
					<button onclick="document.getElementById('id04').style.display='block'"  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Edit Shifts</button>

					<!--Looks Good -->
					<div id="id01" class="w3-modal">
						<form class="modal-content animate" action="" method = "post">
							<div class="w3-modal-content">
								<div class="w3-container">
									<!--
									  This container holds the seven days, each section of which displays the appropriate data for each day.
									  Each day takes the results of one of the seven queries in shiftlookup.php and populates the container with
									  the shifts retrieved.
									-->
									<div class= "shift-screen-area">
										<!-- Weekdays -->
										<div class="day-body">
											<table style = "width:110%" border="0" class="table-class">
												<tr>
													<th>Sunday</th>
													<th>Monday</th>
													<th>Tuesday</th>
													<th>Wednesday</th>
													<th>Thursday</th>
													<th>Friday</th>
													<th>Saturday</th>
												</tr>
												<tr>									
													<?php 
														foreach($day1result as $row)
														{
														?>
												
															<div class="shift-body">
																<form action="employee_newshift.html.php" method="post">
																	<td> 
																	Shift Date: <?php echo $row['date'] ?> <br>
																	Shift Time: <?php echo $row['time_start'] ?> <br> 
																	Shift Time End: <?php echo $row['time_end'] ?> <br>
																	Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																	<br>
																	<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
																	</td>
																</form>
															</div>
														
															<?php
															if(isset($_POST[$row['idshift']]))
															{
																$_SESSION['shift_enroll_id'] = $row['idshift'];
																header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
															}
												
														}
													?>
									
													<?php 
														foreach($day2result as $row)
														{
															?>
												
															<div class="shift-body">
																<form action="employee_newshift.html.php" method="post">
																	<td> 
																	Shift Date: <?php echo $row['date'] ?> <br>
																	Shift Time: <?php echo $row['time_start'] ?> <br> 
																	Shift Time End: <?php echo $row['time_end'] ?> <br>
																	Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																	<br>
																	<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
																	</td>
																</form>
															</div>
														
															<?php
															if(isset($_POST[$row['idshift']]))
															{
																$_SESSION['shift_enroll_id'] = $row['idshift'];
																header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
															}
															
														}										
													?>
									
										
													<?php 
														foreach($day3result as $row)
														{
															?>
															<div class="shift-body">
																<form action="employee_newshift.html.php" method="post">
																	<td> 
																	Shift Date: <?php echo $row['date'] ?> <br>
																	Shift Time: <?php echo $row['time_start'] ?> <br> 
																	Shift Time End: <?php echo $row['time_end'] ?> <br>
																	Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																	<br>
																	<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
																	</td>
																</form>
															</div>
															
															<?php
															if(isset($_POST[$row['idshift']]))
															{
																$_SESSION['shift_enroll_id'] = $row['idshift'];
																header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
															}
														
														}
										
													?>
									
										
													<?php 
														foreach($day4result as $row)
														{
															?>
															
															<div class="shift-body">
																<form action="employee_newshift.html.php" method="post">
																	<td> 
																		Shift Date: <?php echo $row['date'] ?> <br>
																		Shift Time: <?php echo $row['time_start'] ?> <br> 
																		Shift Time End: <?php echo $row['time_end'] ?> <br>
																		Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																		<br>
																		<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
																	</td>
																</form>
															</div>
															
															<?php
															if(isset($_POST[$row['idshift']]))
															{
																$_SESSION['shift_enroll_id'] = $row['idshift'];
																header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
															}
																
														}
													?>
									
										
													<?php 
														foreach($day5result as $row)
														{
															?>											
															<div class="shift-body">
																<form action="employee_newshift.html.php" method="post">
																	<td> 
																		Shift Date: <?php echo $row['date'] ?> <br>
																		Shift Time: <?php echo $row['time_start'] ?> <br> 
																		Shift Time End: <?php echo $row['time_end'] ?> <br>
																		Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																		<br>
																		<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
																	</td>
																</form>
															</div>
											
															<?php
															if(isset($_POST[$row['idshift']]))
															{
																$_SESSION['shift_enroll_id'] = $row['idshift'];
																header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
															}
											
														}
										
													?>
									
										
													<?php 
														foreach($day6result as $row)
														{
															?>
											
															<div class="shift-body">
																<form action="employee_newshift.html.php" method="post">
																	<td> 
																		Shift Date: <?php echo $row['date'] ?> <br>
																		Shift Time: <?php echo $row['time_start'] ?> <br> 
																		Shift Time End: <?php echo $row['time_end'] ?> <br>
																		Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																		<br>
																		<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
																	</td>
																</form>
															</div>
														
															<?php
															if(isset($_POST[$row['idshift']]))
															{
																$_SESSION['shift_enroll_id'] = $row['idshift'];
																header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
															}
											
														}
										
													?>
									
										
													<?php 
														foreach($day7result as $row)
														{
															?>
												
															<div class="shift-body">
																<form action="employee_newshift.html.php" method="post">
																	<td> 
																		Shift Date: <?php echo $row['date'] ?> <br>
																		Shift Time: <?php echo $row['time_start'] ?> <br> 
																		Shift Time End: <?php echo $row['time_end'] ?> <br>
																		Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																		<br>
																		<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
																	</td>
																</form>
															</div>
												
															<?php
															if(isset($_POST[$row['idshift']]))
															{
																$_SESSION['shift_enroll_id'] = $row['idshift'];
																header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
															}
												
														}
										
													?>
									
									
												</tr>
									
											</table>
										</div>
									</div>
									<div class="container-enroll" style="background-color:#f1f1f1">
										<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
									</div>
								</div>
							</div>							
						</form>
					</div>
										
					<div id="id02" class="w3-modal">
						<form class="modal-content animate" action="" method = "post">
							<div class="w3-modal-content">
								<div class="w3-container">
									<table style = "width:80%" border="0" class="table-class">
										<tr>
											<td>
												<label for="Shift_ID"><b>SHIFT-ID  </b></label>
											</td>
											<td>
												<input type="text" placeholder="Enter the shift ID" name="Shift_ID" required>
											</td>
										</tr>
										<tr>
											<td>
												<label for = "mangerfirstname"> <b>MANAGER FIRST NAME </b> </label>
											</td>
											<td>
												<input type = "text" placeholder = "Enter manager first name" name = "manager_first_name" required>
											</td>
										</tr>
										<tr>
											<td>
												<label for = "mangerlastname"> <b>MANAGER LAST NAME </b> </label>
											</td>
											<td>
												<input type = "text" placeholder = "Enter manager last name" name = "manager_last_name" required>
											</td>
										</tr>
										<tr>
											<td>
												<label for = "StartShift"> <b>START SHIFT </b> </label>
											</td>
											<td>
												<input type = "time"  name = "Start_Shift" required>
											</td>
										</tr>
										<tr>
											<td>
												<label for = "EndShift"> <b>END SHIFT </b> </label>
											</td>
											<td>
												<input type = "time"  name = "End_Shift" required>
											</td>
										</tr>
										<tr>
											<td>
												<label for="Reason"><b>REASON  </b></label>
											</td>
											<td>
												<input type="text" placeholder="Enter reason..." name="reason" required>
											</td>
										</tr>
									</table>
									<button type="submit" class= "submitbtn" name ="request_submit">Submit</button>
									<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
								</div>
							</div>
						</form>
					</div>
					
					<div id="id03" class="w3-modal">
					
						<h3>Week of <?php echo date("F jS, Y", strtotime($daterange[0])) ?> to <?php echo date("F jS, Y", strtotime($daterange[1])) ?></h3>
						<!--
						  This form takes a date selected by the user and stores it, and the reloads the page.  Due to a stored date
						  taking priority over the default current date in shiftlookup.php, the page will be loaded with the selected
						  week's shifts rather than the current week's.
						-->
						<div class="w3-modal-content">
							<div class="w3-container">
								<form action="462input_handler.php" method="post">
								  <div>
									<label for="party">Choose your desired date to view:</label>
									<input type="date" id="shift_date_range" name="shift_date_range" required>
									<input type="submit" name="shift_date_submit">
								  </div>
								</form>
								<!--
								  This container holds the seven days, each section of which displays the appropriate data for each day.
								  Each day takes the results of one of the seven queries in shiftlookup.php and populates the container with
								  the shifts retrieved.
								-->
						
								<!--  -->								
								<div class="day-body">
									<table style = "width:110%" border="0" class="table-class">
										<tr>
											<th>Sunday</th>
											<th>Monday</th>
											<th>Tuesday</th>
											<th>Wednesday</th>
											<th>Thursday</th>
											<th>Friday</th>
											<th>Saturday</th>
										</tr>
										<tr>									
											<?php 
												foreach($day1result as $row)
												{
													?>
													
													<div class="shift-body">
														<form action="employee_newshift.html.php" method="post">
															<td> 
																Shift Date: <?php echo $row['date'] ?> <br>
																Shift Time: <?php echo $row['time_start'] ?> <br> 
																Shift Time End: <?php echo $row['time_end'] ?> <br>
																Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																<br>
																<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
															</td>
														</form>
													</div>
													
													<?php
													if(isset($_POST[$row['idshift']]))
													{
														$_SESSION['shift_enroll_id'] = $row['idshift'];
														header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
													}
													
												}
												
											?>
											
											<?php 
												foreach($day2result as $row)
												{
													?>
													
													<div class="shift-body">
														<form action="employee_newshift.html.php" method="post">
															<td> 
																Shift Date: <?php echo $row['date'] ?> <br>
																Shift Time: <?php echo $row['time_start'] ?> <br> 
																Shift Time End: <?php echo $row['time_end'] ?> <br>
																Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																<br>
																<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
															</td>
														</form>
													</div>
													
													<?php
													if(isset($_POST[$row['idshift']]))
													{
														$_SESSION['shift_enroll_id'] = $row['idshift'];
														header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
													}
													
												}
												
											?>
										
												
											<?php 
												foreach($day3result as $row)
												{
													?>
													
													<div class="shift-body">
														<form action="employee_newshift.html.php" method="post">
															<td> 
																Shift Date: <?php echo $row['date'] ?> <br>
																Shift Time: <?php echo $row['time_start'] ?> <br> 
																Shift Time End: <?php echo $row['time_end'] ?> <br>
																Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																<br>
																<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
															</td>
														</form>
													</div>
													
													<?php
													if(isset($_POST[$row['idshift']]))
													{
														$_SESSION['shift_enroll_id'] = $row['idshift'];
														header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
													}
													
												}
												
											?>
										
												
											<?php 
												foreach($day4result as $row)
												{
													?>
													
													<div class="shift-body">
														<form action="employee_newshift.html.php" method="post">
															<td> 
																Shift Date: <?php echo $row['date'] ?> <br>
																Shift Time: <?php echo $row['time_start'] ?> <br> 
																Shift Time End: <?php echo $row['time_end'] ?> <br>
																Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																<br>
																<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
															</td>
														</form>
													</div>
													
													<?php
													if(isset($_POST[$row['idshift']]))
													{
														$_SESSION['shift_enroll_id'] = $row['idshift'];
														header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
													}
													
												}
												
											?>
											
												
											<?php 
												foreach($day5result as $row)
												{
													?>
													<div class="shift-body">
														<form action="employee_newshift.html.php" method="post">
															<td> 
																Shift Date: <?php echo $row['date'] ?> <br>
																Shift Time: <?php echo $row['time_start'] ?> <br> 
																Shift Time End: <?php echo $row['time_end'] ?> <br>
																Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																<br>
																<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
															</td>
														</form>
													</div>
													
													<?php
													if(isset($_POST[$row['idshift']]))
													{
														$_SESSION['shift_enroll_id'] = $row['idshift'];
														header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
													}
													
												}
												
											?>
										
												
											<?php 
												foreach($day6result as $row)
												{
													?>
													<div class="shift-body">
														<form action="employee_newshift.html.php" method="post">
															<td> 
																Shift Date: <?php echo $row['date'] ?> <br>
																Shift Time: <?php echo $row['time_start'] ?> <br> 
																Shift Time End: <?php echo $row['time_end'] ?> <br>
																Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																<br>
																<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
															</td>
														</form>
													</div>
													
													<?php
													if(isset($_POST[$row['idshift']]))
													{
														$_SESSION['shift_enroll_id'] = $row['idshift'];
														header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
													}
													
												}
												
											?>
											
												
											<?php 
												foreach($day7result as $row)
												{
													?>
													
													<div class="shift-body">
														<form action="employee_newshift.html.php" method="post">
															<td> 
																Shift Date: <?php echo $row['date'] ?> <br>
																Shift Time: <?php echo $row['time_start'] ?> <br> 
																Shift Time End: <?php echo $row['time_end'] ?> <br>
																Workers Needed: <?php echo $row['workers_needed'] ?> <br> 
																<br>
																<input class="shift-button" type="submit" name="<?php echo $row['idshift'] ?>" value="Enroll"><br>
															</td>
														</form>
													</div>
													
													<?php
													if(isset($_POST[$row['idshift']]))
													{
														$_SESSION['shift_enroll_id'] = $row['idshift'];
														header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
													}
													
												}
												
											?>									
										</tr>
									</table>
									<div class="container-enroll" style="background-color:#f1f1f1">
										<button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
									</div>
								</div>
							</div>
						</div>							
					</div>	

					<!--Looks Good -->
					<div id="id04" class="w3-modal">
						<div class="w3-modal-content">
							<div class="w3-container">
								<form action="462input_handler.php"  method="post" >
									<table border="0">
										<tr>
										  <td>Day</td>
										  <td><input type="Date" name="date" value="<?php echo $day?>"></td>
										</tr>
										<tr>
										  <td>Start Time</td>
										  <td><input type="Time" name="time_start" value="<?php echo $starttime?>"></td>
										</tr>
										<tr>
											<td>End Time</td>
											<td><input type="Time" name="time_end" value="<?php echo $endtime?>"></td>
										</tr>
										<tr>
											<td>Number of Workers Required </td>
											<td><input type="number" name="workers_needed" value="<?php echo $numreq?>"></td>
										</tr>
										<tr>
											<td><input type="hidden" name="idshift" value=<?php echo $_GET['idshift'];?>></td>
											<td><input type="submit" name="edit_shift_submit" value="Update"></td>
										</tr>
									</table>
								</form>
								<div class="container-enroll" style="background-color:#f1f1f1">
									<button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
            <!-- End Left Column -->
          </div>
          <!-- Middle Column -->
        <div class="w3-col m7">
			<div class="w3-row-padding">
				<div class="w3-col m12">
					<div class="w3-card w3-round w3-white">
						<div class="w3-container w3-padding">
							<h6 class="w3-opacity">Current Events</h6>
							<li> <?php echo date("h:i:sa"); ?> </span></li>
						</div>
						<ul class="weekdays">
						<li>Mo</li>
						  <li>Tu</li>
						  <li>We</li>
						  <li>Th</li>
						  <li>Fr</li>
						  <li>Sa</li>
						  <li>Su</li>
						</ul>

						<ul class="days">
							<li>1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li>6</li>
							<li>7</li>
							<li>8</li>
							<li>9</li>
							<li><span class="active">10</span></li>
							<li>11</li>
							<li>12</li>
							<li>13</li>
							<li>14</li>
							<li>15</li>
							<li>16</li>
							<li>17</li>
							<li>18</li>
							<li>19</li>
							<li>20</li>
						</ul> 
					</div>
				</div>
            </div>

		  <!-- End Middle Column -->
          </div>
          <!-- Right Column -->
          <div class="w3-col m2">
            <div class="w3-card w3-round w3-white w3-center">
              <div class="w3-container">
                <p>Upcoming Events:</p>
                <p><strong>Holiday</strong></p>
                <p>Friday 15:00</p>
                <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
              </div>
            </div>
            <br>
            <!-- End Right Column -->
          </div>
          <!-- End Grid -->
        </div>
        <!-- End Page Container -->
      </div>
      <br>
      <!-- Footer -->
      <footer class="w3-container w3-theme-d3 w3-padding-16">
        <h5>TaskerApp LLC.</h5>
      </footer>
      <script>
        // Accordion
        function myFunction(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
          } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-theme-d1", "");
          }
        }
        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
          var x = document.getElementById("navDemo");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
         }
       }
      </script>
  </body>
</html>
