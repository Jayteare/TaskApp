<?php

  $id = $_GET['id'];

  $conn =  mysqli_connect('us-cdbr-iron-east-05.cleardb.net:3306', 'b52e20d0f5da46', 'fc4f25b0', 'heroku_0188da0de4a5cfa');

  if(!$conn){
    die ("Connection failed:  " .mysqli_connect_error());
  }

    $sql = "UPDATE prerequest SET prerequest.Status = 'Declined' where prerequest.ID=$id";
    if (mysqli_query($conn, $sql)) {
      mysqli_close($conn);

      header('Location:http://localhost/462Project/manager_approval.html.php');
      exit;
    } else {
      echo "Error deleting record";
    }
?>
