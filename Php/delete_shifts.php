<?php
//including the database connection file
include("initiate_db.php");

//getting id of the data from url
$idshift = $_GET['idshift'];
//deleting the row from table
$query = "DELETE FROM created_shifts WHERE idshift='".$idshift."'";
$stmt = $db->prepare($query);
$stmt->execute();
//left until proven to work
// $result = mysqli_query($conn, "DELETE FROM created_shifts WHERE shiftid='".$shiftid."'");

//redirecting to the shift display page
header("Location:create_shifts.html.php");
?>
