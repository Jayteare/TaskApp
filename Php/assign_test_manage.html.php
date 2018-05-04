<!DOCTYPE html>
<?php
  include 'initiate_db.php';
  session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shift Assign</title>
  </head>
  <body>
<?php
  $numberquery = "SELECT workers_needed
                  FROM created_shifts
                  WHERE idshift = '".$_SESSION['cur_shift_manage']."' ";
  $numberstmt = $db->prepare($numberquery);
  $numberstmt->execute();
  $numberresult = $numberstmt->fetchAll();
  foreach($numberresult as $numberrow){
    $_SESSION['cur_shift_workers'] = $numberrow['workers_needed'];
  }
  $personquery = "SELECT queued_shifts.username, queued_shifts.fname, queued_shifts.lname, created_shifts.date, created_shifts.time_start, created_shifts.time_end, created_shifts.workers_needed
                  FROM queued_shifts, created_shifts
                  WHERE queued_shifts.idshift = created_shifts.idshift AND queued_shifts.idshift = '".$_SESSION['cur_shift_manage']."' AND queued_shifts.company_id = '".$_SESSION['company_id']."' ";
  $personstmt = $db->prepare($personquery);
  $personstmt->execute();
  $personresult = $personstmt->fetchAll();
?>
    <h1>Shift Assign</h1>
    <h5>Please select <?php echo $_SESSION['cur_shift_workers'] ?> individual(s).</h5>
    <form action="462input_handler.php" method="post">
<?php
  foreach($personresult as $personrow){
?>
      <input type="checkbox" name="shiftAssign[]" value="<?php echo $personrow['username']?>" /><?php echo $personrow['fname']?> <?php echo $personrow['lname']?><br />
<?php
  }
  if(isset($_SESSION['assignCreateErrorMsg'])){
      //JavaScript error pop-up is displayed upon detection of invalid submission
      echo '<script type="text/javascript">
              alert("'.$_SESSION['assignCreateErrorMsg'].'");
            </script>';
      $_SESSION['assignCreateErrorMsg']=null;
    }
?>
      <input type="submit" name="assign_shift_submit" value="Confirm" />
    </form>
  </body>
</html>
