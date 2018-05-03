<!doctype html>
<?php
include("initiate_db.php");
sesssion_start();
?>
<html>
  <head>
    <link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
  </head>
  <body>
<?php
	echo "<h1>Schedule</h1>";
	  // Attempt select query execution
	$query = "SELECT * FROM final_shifts WHERE company_id = '".$_SESSION['company_id']."'";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll();
	echo "<table align='center'>";
		echo "<tr>";
			echo "<th>First Name</th>";
			echo "<th>Last Name</th>";
			echo "<th>Day</th>";
			echo "<th>Start Time</th>";
			echo "<th>End Time</th>";
	 // echo "<th>Company</th>";
		echo "</tr>";
	foreach($result as $row){
	  $shiftid = $row['idshift'];
		$shiftquery = "SELECT date,time_start, time_end FROM created_shifts WHERE idshift='$shiftid'";
	  $shiftstmt = $db->prepare($shiftquery);
	  $shiftstmt->execute();
	  $shiftresult = $shiftstmt->fetchAll();
		foreach($shiftresult as $shiftrow){
		  echo "<tr>";
        echo "<td>". $row['fname']."</td>";
        echo "<td>". $row['lname']."</td>";
        echo "<td>" . $shiftrow['date'] . "</td>";
        echo "<td>" . $shiftrow['time_start'] . "</td>";
		    echo "<td>" . $shiftrow['time_end'] . "</td>";
		  echo "</tr>";
	  }
	}
	echo "</table>";
	?>
	  </body>
	</html>
