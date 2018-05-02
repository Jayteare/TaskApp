<?php
  // including the database connection file
  include("initiate_db.php");
  //getting id from url
  $idshift = $_GET['idshift'];
  //selecting data associated with this particular id
  $query = "SELECT * FROM created_shifts WHERE idshift=$idshift";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll();
  foreach($result as $row){
    $day = $row['date'];
    $starttime = $row['time_start'];
    $endtime = $row['time_end'];
    $numreq=$row['workers_needed'];
  }
?>
<html>
  <head>
    <title>Edit Data</title>
  </head>
  <body>
    <a href="create_shifts.html.php">Home</a>
    <br/><br/>
    <form action="462input_handler.php"  method="post" >
      <table border="0">
        <tr>
          <td>Day</td>
          <td><input type="Date" name="day" value="<?php echo $day?>"></td>
        </tr>
        <tr>
          <td>Start Time</td>
          <td><input type="Time" name="time_start" value="<?php echo $starttime?>"></td>
        </tr>
			  <tr>
          <td>End Time</td>
          <td><input type="Time" name="time_end" value="<?php echo $endtime?>"></td>
        </tr>
        <tr>
          <td>Number of Shifts Required </td>
          <td><input type="number" name="workers_needed" value="<?php echo $numreq?>"></td>
        </tr>
        <tr>
          <td><input type="hidden" name="idshift" value=<?php echo $_GET['idshift'];?>></td>
          <td><input type="submit" name="edit_shift_submit" value="Update"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
