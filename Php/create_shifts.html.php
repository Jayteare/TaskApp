
<?php
//including the database connection file
session_start();
include("initiate_db.php");

$query = "SELECT idshift, date, TIME_FORMAT(time_start, '%h:%i%p') as time_start, TIME_FORMAT(time_end, '%h:%i%p') as time_end, workers_needed
          FROM created_shifts
          WHERE company_id = '".$_SESSION['company_id']."'
          ORDER BY date ASC, time_start ASC";

$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<html>
<head>
  <title>Create New Shift</title>
	<link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1>Shift Management</h1>
    <table align="center">
      <tr>
        <th>ID</th>
        <th>Day</th>
        <th>Starting Time</th>
        <th>End Time</th>
	      <th># Shifts </th>
	      <td><a href="add_shift.html.php">Add New Shift</a></td>
	      <td><a href="manager_homepage.html.php">Home</a></td>
      </tr>
<?php
  foreach($result as $row) {
      echo "<tr>";
        echo "<td>".$row['idshift']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['time_start']."</td>";
        echo "<td>".$row['time_end']."</td>";
        echo "<td>".$row['workers_needed']."</td>";
        echo "<td><a href=\"edit_shifts.html.php?idshift=$row[idshift]\">Edit</a> | <a href=\"delete_shifts.php?idshift=$row[idshift]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	    echo "</tr>";
	}
?>
    </table>
  </body>
</html>
