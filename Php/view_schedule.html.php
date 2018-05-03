<!DOCTYPE html>
<?php
include 'initiate_db.php';
session_start();
?>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>View Schedule</title>
	</head>
	<body>
		<h1>Schedule</h1>
<?php
	// Attempt select query execution
	$query = "SELECT COUNT(*), idshift, fname, lname, date, time_start, time_end FROM (SELECT final_shifts.idshift, final_shifts.fname, final_shifts.lname, created_shifts.date, created_shifts.time_start, created_shifts.time_end FROM  final_shifts, created_shifts WHERE final_shifts.company_id = '".$_SESSION['company_id']."' && final_shifts.idshift = created_shifts.idshift) AS x";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
?>
		<table>
			<tr>
				<th>Count</th>
				<th>Shift ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Day</th>
				<th>Start Time</th>
				<th>End Time</th>
			</tr>
<?php	foreach($result as $row){ ?>
			<tr>
				<td><?php echo $row['COUNT(*)']?></td>
				<td><?php echo $row['idshift']?></td>
				<td><?php echo $row['fname']?></td>
				<td><?php echo $row['lname']?></td>
				<td><?php echo $row['date']?></td>
				<td><?php echo $row['time_start']?></td>
				<td><?php echo $row['time_end']?></td>
			</tr>
<?php } ?>
			</table>
	</body>
</html>
