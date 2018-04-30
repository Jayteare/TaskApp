<!DOCTYPE html>
<?php
	//Connecting to database
	//Create connection
	$conn = new mysqli('us-cdbr-iron-east-05.cleardb.net:3306', 'b52e20d0f5da46', 'fc4f25b0', 'heroku_0188da0de4a5cfa');
	//Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
<html>
  <head>
	<script>
		//myFunction display a message to the user for them to know how many more employees to assign to a particular shift
		function myFunction(idCheck, count, idShift, totalemp) {
			var checkBox = document.getElementById(idCheck);
			if (checkBox.checked == true) {
				countEmp[count] = countEmp[count] - 1; 
				window.alert("Employee added! Shift ID: " + idShift + " needs " + countEmp[count] + " more employee!");
				assignkey[totalemp] = "1";
			} else {
				countEmp[count] = countEmp[count] + 1;
				assignkey[totalemp] = "0";
			}
		}
		//removeData will remove the employees that were assigned to a shift off the database array but also store the assigned employees to a final assigned employee database 
		function removeData (totalemp) {
			  var i;
			  for (i = 0; i < totalemp; i++) {
			  	  if (assignkey[i] == "1") {
						
				  }
			  }
		}
	</script>
  </head>
  <body>
	<?php
	//Shifts query 
	$shiftsql = "SELECT * FROM created_shifts;";
	$result = $conn->query($shiftsql);

	//Global Variables
	$shiftcount = "0";
      	$availcount = "0";
	$size = "0"; 
	$numEmp = "";
	?> 
	<script> 
		var countEmp = [];
		var assignkey = [];
	</script> 
	 
	<?php
	$mainarray = ""; //Main array used to hold the key information from query
	$shiftidarray = "";
	$empidarray = "";
	$empfnamearray = "";
	$emplnamearray = "";


	//Display shifts - contains *an array ($shiftnamearray) which includes all the shifts info  
	//                          *a shift counter ($shiftcount) that indicates the number of shifts and is used access the shifts in the array
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			//Stores all data from shifts table into an array ($shiftnamearray)
			$shiftname = "Shift ID: " . $row["idshift"] . " Day: " . $row["date"] . " Start Time: " . $row["time_start"] . " End Time: " . $row["time_end"] . " Number of Employees: " . $row["workers_needed"] . "<br>";
			$shiftnamearray[$shiftcount] = "<strong>" . $shiftname . "</strong>";
			echo $shiftnamearray[$shiftcount];
			//Stores the shift id into the main array && stores number of employees per shift into $numEmp
			$mainarray[$shiftcount][$availcount] = $row["idshift"];
			$numEmp = $row["workers_needed"];
			$availcount = $availcount + 1;

			//java variable countEmp = counter used to decrement the number of employees for a shift when the employee is assigned 
			?> 
			<script> countEmp["<?php echo $shiftcount ?>"] = "<?php echo $numEmp ?>"; </script> 
			<?php

			//Display available employee for shifts - contains *a 2x2 array ($mainarray) which inclues   all the people who are available for the Shift
			//												   *a shift counter ($availcount) that indicates the number of people who are availible for the shift and used to access the people from the array
			$ashiftsql = "SELECT * FROM queued_shifts WHERE idshift = \"" . $row["idshift"] . "\" AND company_id = \"" . $_SESSION['company_id'] . "\" ";
			$result2 = $conn->query($ashiftsql);
			if ($result2->num_rows > 0) {
				while ($row2 = $result2->fetch_assoc()) {
					//Stores all data from the available employees for a shift table into main array
					$mainarray[$shiftcount][$availcount] = $row2["fname"] . " " . $row2["lname"]; 
					$shiftidarray[$size] = $row["idshift"];
					//$empidarray[$size] = $row2["fempID"];
					$empfnamearray[$size] = $row2["fname"];
					$emplnamearray[$size] = $row2["lname"];
					echo $mainarray[$shiftcount][$availcount];
					?>
					<script> assignkey["<?php echo $size ?>"] = "0"; </script>
 
					<input type="checkbox" id="myCheck<?php echo $shiftcount; echo $availcount; ?>" onclick="myFunction(
					'myCheck<?php echo $shiftcount; echo $availcount; ?>', 
					'<?php echo $shiftcount ?>', 
					'<?php echo $mainarray[$shiftcount][0] ?>', 
					'<?php echo $size-1 ?>' )">
					<br> 
					<?php 
					$availcount = $availcount + 1;
					$size = $size + 1; 
				}
			}
			$shiftcount = $shiftcount + 1;
			$availcount = 0;
		}
	}

	$conn->close();
	/*
	echo $shiftidarray[$size-1];
	echo $empidarray[$size-1];
	echo $empfnamearray[$size-1];
	echo $emplnamearray[$size-1];
	echo $size;
	*/

	?>
	<br>
	
	<form action = "assign_remove.html" onsubmit="return removeData('<?php echo $size ?>')">
		<input type="submit" value="Confirm">
	</form>

	<form action = "manager_homepage.php" >
		<input type="submit" value="Main Menu">
	</form>

  </body>
</html>
