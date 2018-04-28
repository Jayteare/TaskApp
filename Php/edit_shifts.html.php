<?php
// including the database connection file
include_once("initiate_db.php");
 
if(isset($_POST['update']))
{    
    $shiftid = $_POST['shiftid'];
    
    $day=$_POST['day'];
    $starttime=$_POST['starttime'];
	$endtime=$_POST['endtime'];
    $numreq=$_POST['numreq'];

    
    // checking empty fields
    if(empty($day) || empty($starttime) || empty($endtime) || empty($numreq)) {            
        if(empty($day)) {
            echo "<font color='red'> Day field is empty.</font><br/>";
        }
        
        if(empty($starttime)) {
            echo "<font color='red'>Start time field is empty.</font><br/>";
        }
        
        if(empty($endtime)) {
            echo "<font color='red'>End time field is empty.</font><br/>";
        } 

		if(empty($numreq)) {
            echo "<font color='red'>Number of available Shits field is empty.</font><br/>";
        }		
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE shifts SET day='$day',starttime='$starttime',endtime='$endtime',numreq='$numreq'  WHERE shiftid=$shiftid");
        
        //redirectig to the display page. In our case
        header("Location: create_shifts.html.php");
    }
}
?>
<?php
//getting id from url
$shiftid = $_GET['shiftid'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM shifts WHERE shiftid=$shiftid");
 
while($res = mysqli_fetch_array($result))
{
    $day = $res['day'];
    $starttime = $res['starttime'];
	$endtime = $res['endtime'];
    $numreq=$res['numreq'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="create_shifts.html.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_shift.html.php">
        <table border="0">
            <tr> 
                <td>Day</td>
                <td><input type="Date" name="day" value="<?php echo $day;?>"></td>
            </tr>
            <tr> 
                <td>Start Time</td>
                <td><input type="Time" name="starttime" value="<?php echo $starttime;?>"></td>
            </tr>
			<tr> 
                <td>End Time</td>
                <td><input type="Time" name="endtime" value="<?php echo $endtime;?>"></td>
            </tr>
            <tr> 
                <td>Number of Shifts Required </td>
                <td><input type="number" name="numreq" value="<?php echo $numreq;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="shiftid" value=<?php echo $_GET['shiftid'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
