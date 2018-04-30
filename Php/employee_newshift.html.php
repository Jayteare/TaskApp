<!DOCTYPE html>
<?php  include 'shiftlookup.php'; ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="stylesheets/styles.css">
    <title>Shift Selection</title>
  </head>
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
        <input type="submit" name="shift_date_submit">
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
  				  header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
  			  }
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
  				  header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
  			  }
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
  				  header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
  			  }
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
  				  header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
  			  }
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
  				  header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
  			  }
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
  				  header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
  			  }
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
  				  header('Location:https://taskingapplication.herokuapp.com/Php/enroll_confirm.html.php');
  			  }
  		  }
  		?>
      </div>
    </div>
  </body>
</html>
