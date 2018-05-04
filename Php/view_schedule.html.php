<!DOCTYPE html>
<?php
session_start();
include 'initiate_db.php';
include 'date_lookup.php';
?>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>View Schedule</title>
	</head>
	<body>
		<h1>Schedule</h1>
		<h3>Week of <?php echo date("F jS, Y", strtotime($daterange[0])) ?> to <?php echo date("F jS, Y", strtotime($daterange[1])) ?></h3>
		<form action="462input_handler.php" method="post">
			<div>
				<label for="party">Choose your desired date to view:</label>
				<input type="date" id="shift_date_range" name="shift_date_range" required>
				<input type="submit" name="shift_date_submit_manview">
			</div>
		</form>
<?php
	// Attempt select query execution
	$query = "SELECT final_shifts.idshift, final_shifts.fname, final_shifts.lname, created_shifts.date, TIME_FORMAT(created_shifts.time_start, '%h:%i%p') as time_start, TIME_FORMAT(created_shifts.time_end, '%h:%i%p') as time_end
					  FROM  final_shifts, created_shifts
						WHERE date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND final_shifts.company_id = '".$_SESSION['company_id']."' && final_shifts.idshift = created_shifts.idshift";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
?>
		<table>
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
