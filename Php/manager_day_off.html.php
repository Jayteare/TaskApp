<!DOCTYPE html>
<?php session_start();

$fname =  $_SESSION['fname'];
$lname =  $_SESSION['lname'];
?>


<html>
  <head>
    <meta charset="utf-8">
    <title>Manager Homepage</title>

    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>

  </head>
  <body>
    Hello <?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname']; ?>.  Welcome to the manager homepage.
    <br>

      <a href="https://taskingapplication.herokuapp.com/Php/manager_homepage.html.php">Go back to manager home page</a>
      <br>

      <table style = "width:50%" >
        <tr>
          <th>Shift_ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Start Shift</th>
          <th>End Shift</th>
          <th>Reason</th>
          <th>Status</th>
        </tr>
      <?php
     
       $db = new mysqli('us-cdbr-iron-east-05.cleardb.net:3306', 'b52e20d0f5da46', 'fc4f25b0', 'heroku_0188da0de4a5cfa');
        
        $sql = "SELECT Shift_ID, EFName, ELName, StartShift, EndShift, Reason, Status FROM prerequest
      WHERE (EFName = '".$fname."' AND ELName = '".$lname."') AND (Status = 'Approve' OR Status = 'Decline')";

          $stmt = $conn->prepare($sql);
      $stmt->execute();
      $stmt->store_result();
      $stmt->bind_result($shift_ID, $EFName, $ELName, $StartShift, $EndShift, $Reason, $Status);      
      if($stmt->num_rows > 0){
      while($stmt->fetch()){
          echo "<tr>";
          echo "<td >".$shift_ID."</td>";
          echo "<td >".$EFName."</td>";
          echo "<td >".$ELName."</td>";
          echo "<td >".$StartShift."</td>";
          echo "<td >".$EndShift."</td>";
          echo "<td >".$Reason."</td>";
          echo "<td >".$Status."</td>";
  
          echo "</tr>";
        }
      }
       else {
        ?>
        <tr>
          <td colspan="7"><center> <?php echo "There is no request!!!" ?> </center></td>
        <tr>
          <?php
        }

      ?>
    <a href="http://localhost/462Project/index.html.php">Logout</a>

  </body>
</html>
