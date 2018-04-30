<!DOCTYPE html>
<?php include 'shiftlookup.php'; ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="stylesheets/styles.css">
    <title>Shift Selection</title>
  </head>
  <body>
  <div class= "shift-screen-area">
    <div class= "sunday-title">
      <span class="title-body">Sunday</span>
    </div>
    <div class="sunday-body">
        <?php foreach($day1result as $row){ ?>
          <div class="shift-body">
            <form action="/462Project/employee_newshift.html.php" method="post">
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
  				    header('Location:http://localhost/462Project/enroll_confirm.html.php');
  			    }
  		    }
  		  ?>
    </div>

    <div class="monday-title">
      <span class="title-body">Monday</span>
    </div>
    <div class="monday-body">
        <?php foreach($day2result as $row){ ?>
          <div class="shift-body">
            <form action="/462Project/employee_newshift.html.php" method="post">
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
  				    header('Location:http://localhost/462Project/enroll_confirm.html.php');
  			    }
  		    }
  		  ?>
    </div>
    <div class="tuesday-title">
        <span class="title-body">Tuesday</span>
    </div>
    <div class="tuesday-body">
        <?php foreach($day3result as $row){ ?>
          <div class="shift-body">
            <form action="/462Project/employee_newshift.html.php" method="post">
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
  				    header('Location:http://localhost/462Project/enroll_confirm.html.php');
  			    }
  		    }
  		  ?>
      </div>



      <div class="wednesday-title">
        <span class="title-body">Wednesday</span>
      </div>
      <div class="wednesday-body">
        <?php foreach($day4result as $row){ ?>
          <div class="shift-body">
            <form action="/462Project/employee_newshift.html.php" method="post">
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
  				    header('Location:http://localhost/462Project/enroll_confirm.html.php');
  			    }
  		    }
  		  ?>
      </div>



      <div class="thursday-title">
        <span class="title-body">Thursday</span>
      </div>
      <div class="thursday-body">
        <?php foreach($day5result as $row){ ?>
          <div class="shift-body">
            <form action="/462Project/employee_newshift.html.php" method="post">
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
  				    header('Location:http://localhost/462Project/enroll_confirm.html.php');
  			    }
  		    }
  		  ?>
      </div>



      <div class="friday-title">
        <span class="title-body">Friday</span>
      </div>
      <div class="friday-body">
        <?php foreach($day6result as $row){ ?>
          <div class="shift-body">
            <form action="/462Project/employee_newshift.html.php" method="post">
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
  				    header('Location:http://localhost/462Project/enroll_confirm.html.php');
  			    }
  		    }
  		  ?>
      </div>



      <div class="saturday-title">
        <span class="title-body">Saturday</span>
      </div>
      <div class="saturday-body">
        <?php foreach($day7result as $row){ ?>
          <div class="shift-body">
            <form action="/462Project/employee_newshift.html.php" method="post">
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
  				    header('Location:http://localhost/462Project/enroll_confirm.html.php');
  			    }
  		    }
  		  ?>
      </div>

  </div>
  </body>
</html>
