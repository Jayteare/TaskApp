<!DOCTYPE html>
<?php
  include 'initiate_db.php';
  session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$shiftquery = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%h:%i%p') as time_start, TIME_FORMAT(time_end, '%h:%i%p') as time_end, workers_needed, date
               FROM created_shifts T1
                 LEFT JOIN final_shifts T2 ON T1.idshift = T2.idshift
               WHERE T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL";
$shiftstmt = $db->prepare($shiftquery);
$shiftstmt->execute();
$shiftresult = $shiftstmt->fetchAll();
foreach($shiftresult as $shiftrow){
$shiftname = "Shift ID: " . $shiftrow["idshift"] . " Day: " . $shiftrow["date"] . " Start Time: " . $shiftrow["time_start"] . " End Time: " . $shiftrow["time_end"] . " Number of Employees: " . $shiftrow["workers_needed"];
echo $shiftname;
echo "<br>";
?>
<form action="assign_test_page.html.php" method="post">
  <input type="submit" name=" <?php echo $shiftrow["idshift"] ?>" value="Manage">
</form>
<?php
  if(isset($_POST[$shiftrow["idshift"]])){
    $_SESSION['cur_shift_manage'] = $shiftrow["idshift"];
    header('Location:assign_test_manage.html.php');
  }
} ?>
  </body>
</html>
