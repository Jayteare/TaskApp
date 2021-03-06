<!DOCTYPE html>
<?php
  session_start();
  include 'initiate_db.php';
  include 'shiftconfirm.php';
  $fname =  $_SESSION['fname'];
  $lname =  $_SESSION['lname'];
  $username =   $_SESSION['cur_user'];
?>
<html>
<title>Confirm Enrollment</title>
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
      <a href="employee_homepage.html.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>ScheduleMi</a>
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
      <!--
        When a shift is selected on employee_newshift.html.php the user is directed to this page
        which displays the day and time of the selected shift. Upon hitting the confirm button,
        462input_handler.php then takes the user's "username" and the "idshift" of the selected shift
        from $_SESSION and stores them in the queued_shifts table.
      -->
      <div class="shift-body">
        Confirming enrollment in shift:<br><br>
        <?php
          foreach($result as $row){
        ?>
        Shift Day: <?php echo $row['date'] ?> <br>
        Shift Time: <?php echo $row['time_start'] ?> to <?php echo $row['time_end'] ?> <br>
        <form action="462input_handler.php" method="post">
          <input class= "shift-button" type="submit" name="shift_enroll_confirmation" value="Confirm"><br><br>
        </form>
        <form action="462input_handler.php" method="post">
          <input class= "shift-button" type="submit" name="shift_enroll_cancel" value="Cancel"><br><br>
        </form>
      </div>
      <?php
          }
      ?>

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
