<!doctype html>
<html>
<head>
<link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	include("initiate_db.php");
	
	echo "<h1>Employee Schedule</h1>";
	

	// Attempt select query execution
	$sql = "SELECT * FROM final_shifts";
	if($result = $conn->query($sql)){
		if($result->num_rows > 0){
			
			echo "<table align='center'>";
            echo "<tr>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Day</th>";
            echo "<th>Start Time</th>";
	    echo "<th>End Time</th>";
	    // echo "<th>Company</th>";		
            echo "</tr>";
			while($row = $result->fetch_array()){
				$empid=$row['username'];
				$sql2 = "SELECT fname,lname FROM employees WHERE username='$empid'";
				$result2 = $conn->query($sql2);
				$empcolumns = $result2->fetch_array();
				$shiftid = $row['idshift'];
				$sql3 = "SELECT date,time-start, time-end FROM created_shifts WHERE idshift='$shiftid'";
				$result3 = $conn->query($sql3);
				$shiftcolumns = $result3->fetch_array();
				
				echo "<tr>";
                echo "<td>". $empcolumns['fname']."</td>";
                echo "<td>". $empcolumns['lname']."</td>";
                echo "<td>" . $shiftcolumns['day'] . "</td>";
                echo "<td>" . $shiftcolumns['time-start'] . "</td>";
		echo "<td>" . $shiftcolumns['time-end'] . "</td>";
		echo "</tr>";
				//$result2->free();
				//$result3->free();
		}
		echo "</table>";
			// Free result set
			$result->free();
    } 	else{
			echo "No records matching your query were found.";
			}
	} else{
		echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
		}
 
	// Close connection
	?>
	</body>
	</html>
