<!DOCTYPE html>
<?php
  session_start();
  include 'initiate_db.php';
  $fname =  $_SESSION['fname'];
  $lname =  $_SESSION['lname'];
  $username =   $_SESSION['cur_user'];

?>
<html>
<title>Manager Homepage</title>
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

</style>
  <body class="w3-theme-l5">
    <!-- Navbar -->
    <div class="w3-top">
     <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="manager_homepage.html.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>ScheduleMi</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
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
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
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
              <h4 class="w3-center"><?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname']; ?></h4>
              <hr>
              <p><i class="fa fa-fw w3-margin-right w3-text-theme"></i><?php echo $_SESSION['email'] ?> </p>
              <?php
              $query = "SELECT name FROM company WHERE idcompany = '".$_SESSION['company_id']."'";
              $stmt = $db->prepare($query);
              $stmt->execute();
              $result = $stmt->fetchAll();
              foreach($result as $row){
              ?>
              <p><i class="fa fa-fw w3-margin-right w3-text-theme"></i>Company Name: <b><?php echo $row['name'] ?></b </p>
              <?php } ?>

            </div>
          </div>
          <br>
          <!-- Accordion -->
          <div class="w3-card w3-round">
            <div class="w3-white">
              <button onclick="location.href = 'https://taskingapplication.herokuapp.com/Php/create_shifts.html.php';" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Create Shifts</button>

              <button onclick="location.href = 'https://taskingapplication.herokuapp.com/Php/assign_test_page.html.php';" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Assign Shifts</button>

              <button onclick="location.href = 'https://taskingapplication.herokuapp.com/Php/view_schedule.html.php';"  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> View Weekly Schedule</button>

              <button onclick="location.href = 'https://taskingapplication.herokuapp.com/Php/manager_day_off.html.php';"  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Approve Days Off</button>

              <button onclick="location.href = 'https://taskingapplication.herokuapp.com/Php/manager_approval.html.php';"  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Approved Day-Off Requests</button>

        </div>
      </div>
      <br>
            <!-- End Left Column -->
          </div>
          <!-- Middle Column -->
          <div class="w3-col m7">
  			<div class="w3-row-padding">
  				<div class="w3-col m12">
  					<div class="w3-card w3-round w3-white">
  						<div class="w3-container w3-padding">
  							<h6 class="w3-opacity">Current Events</h6>
  							<span> <?php echo date("g:i A"); ?> </span>
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
  							<li><span class="active">5</li>
  							<li>6</li>
  							<li>7</li>
  							<li>8</li>
  							<li>9</li>
  							<li>10</span></li>
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
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li>31</li>
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
                <p>Upcoming Holidays:</p>
                <p><strong>Memorial Day</strong></p>
                <p>Monday May 28th</p>
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
        <h5>ScheduleMi</h5>
      </footer>
      <footer class="w3-container w3-theme-d5">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
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
