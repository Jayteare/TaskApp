<!DOCTYPE html>
<?php
include("initiate_db.php");
session_start();
?>
<html>
  <head>
	  <title>Add Shift</title>
  </head>
  <body>
	  <h1>Schedule</h1>
<?php
	// Attempt select query execution
	$query = " SELECT final.idshift, final.fname, final.lname, create.date, create.time_start, create.time_end
	           FROM final_shifts as final, created_shifts as create
						 WHERE company_id = '".$_SESSION['company_id']."' and final.idshift = create.idshift ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll();
?>
  	<table align='center'>
      <tr>
				<th>Shift ID</th>
    	  <th>First Name</th>
        <th>Last Name</th>
      	<th>Day</th>
    	  <th>Start Time</th>
    	  <th>End Time</th>
    	</tr>
<?php	foreach($result as $row){ ?>
    	<tr>
				<td><?php echo $row['final.idshift']?></td>
        <td><?php echo $row['final.fname']?></td>
        <td><?php echo $row['final.lname']?></td>
        <td><?php echo $row['create.date']?></td>
        <td><?php echo $row['create.time_start']?></td>
    	  <td><?php echo $row['create.time_end']?></td>
    	</tr>
<?php } ?>
    	</table>
  </body>
</html>
