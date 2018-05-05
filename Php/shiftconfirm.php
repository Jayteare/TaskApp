<?php
  session_start();
  include 'initiate_db.php';
  $countNum = 0;
  $numquery = "SELECT COUNT(*)
            FROM(SELECT *
                 FROM queued_shifts
                 WHERE idshift = '".$_SESSION['shift_enroll_id']."' && company_id = '".$_SESSION['company_id']."' && username = '".$_SESSION['cur_user']."') AS x ";
  $numstmt = $db->prepare($numquery);
  $numstmt->execute();
  $numresult = $numstmt->fetchAll();
  foreach($numresult as $numrow){
    $countNum = $numrow['COUNT(*)'];
  }

  $query = "SELECT date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end FROM created_shifts WHERE idshift = '".$_SESSION['shift_enroll_id']."' && company_id = '".$_SESSION['company_id']."' ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll();
?>
