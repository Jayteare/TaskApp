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
$shiftquery = "SELECT * FROM created_shifts";
$shiftstmt = $db->prepare($shiftquery);
$shiftstmt->execute();
$shiftresult = $shiftstmt->fetchAll();
foreach($shiftresult as $shiftrow){
$shiftname = "Shift ID: " . $shiftrow["idshift"] . " Day: " . $shiftrow["date"] . " Start Time: " . $shiftrow["time_start"] . " End Time: " . $shiftrow["time_end"] . " Number of Employees: " . $shiftrow["workers_needed"] . "<br>";
echo $shiftname;
  $personquery = "SELECT * FROM queued_shifts WHERE idshift = '".$shiftrow['idshift']."' AND company_id = '".$_SESSION['company_id']."' ";
  $personstmt = $db->prepare($personquery);
  $personstmt->execute();
  $personresult = $personstmt->fetchAll();
  foreach($personresult as $personrow){
    echo $personrow['username'];
  }
?>

<?php } ?>
  </body>
</html>
